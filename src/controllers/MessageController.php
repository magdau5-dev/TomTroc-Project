<?php

require_once __DIR__ . '/../core/View.php';
require_once __DIR__ . '/../managers/MessageManager.php';
require_once __DIR__ . '/../managers/UserManager.php';

class MessageController
{
    public function showConversation(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /TomTroc-Project/?page=connexion');
            exit;
        }

        $userIdSender = (int) $_SESSION['user_id'];

        $userIdReceiver = (int) ($_GET['id'] ?? 0);

        $userManager = new UserManager();

        $messageManager = new MessageManager();

        $receiverUser = null;
        $messages = [];

        if ($userIdReceiver !== 0) {

            $receiverUser = $userManager->findById($userIdReceiver);

            if (!$receiverUser) {
                View::render('notFound404');
                return;
            }

            if (isset($_POST['btnSendMessage'])) {

                $content = trim($_POST['content'] ?? '');

                if (!empty($content)) {
                    $messageManager->sendMessage(
                        $userIdSender,
                        $userIdReceiver,
                        $content
                    );
                }

                header(
                    'Location: /TomTroc-Project/?page=chat&id=' . $userIdReceiver
                );

                exit;
            }

            $messages = $messageManager->findConversation(
                $userIdSender,
                $userIdReceiver
            );
        }

        $conversationsList = $messageManager->findConversationsList($userIdSender);

        $conversations = [];

        foreach ($conversationsList as $conversation) {
            $conversation['user'] = $userManager->findById($conversation['user_id']);
            $conversations[] = $conversation;
        }

        View::render('chat', [
            'conversations' => $conversations,
            'messages' => $messages,
            'receiverUser' => $receiverUser,
            'userIdSender' => $userIdSender
        ]);
    }
}