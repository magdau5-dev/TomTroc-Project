<?php

require_once __DIR__ . '/../models/Database.php';

class MessageManager
{
    private PDO $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function findConversation($userIdSender, $userIdReceiver): array
    {
        // Récupère tous les messages entre deux utilisateurs, triés par date de création
        $sql = "
            SELECT *
            FROM messages
            WHERE
                (sender_id = :user_id_sender AND receiver_id = :user_id_receiver)
                OR
                (sender_id = :user_id_receiver AND receiver_id = :user_id_sender)
            ORDER BY created_at ASC
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'user_id_sender' => $userIdSender,
            'user_id_receiver' => $userIdReceiver
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findConversationsList(int $userId): array
    {
        // Un message par interlocuteur, le plus récent en premier
        $sql = "
            SELECT
                CASE WHEN sender_id = :user_id THEN receiver_id ELSE sender_id END AS other_user_id,
                content,
                created_at
            FROM messages
            WHERE sender_id = :user_id OR receiver_id = :user_id
            ORDER BY created_at DESC
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'user_id' => $userId
        ]);

        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

        $conversations = [];

        foreach ($rows as $row) {
            $otherUserId = (int) $row['other_user_id'];

            if (!isset($conversations[$otherUserId])) {
                $conversations[$otherUserId] = [
                    'user_id' => $otherUserId,
                    'last_message' => $row['content'],
                    'last_message_at' => $row['created_at']
                ];
            }
        }

        return array_values($conversations);
    }

    public function sendMessage(
        int $senderId,
        int $receiverId,
        string $content
    ): void {
        $sql = "
            INSERT INTO messages (
                sender_id,
                receiver_id,
                content
            )
            VALUES (
                :sender_id,
                :receiver_id,
                :content
            )
        ";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'content' => $content
        ]);
    }
}