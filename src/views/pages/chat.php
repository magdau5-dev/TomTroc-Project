<section class="chat-page">

    <div class="chat-container">

        <div class="chat-list">

            <p class="chat-list-title">Messagerie</p>

            <?php foreach ($conversations as $conversation): ?>

                <?php if ($conversation['user']): ?>

                    <a
                        href="/TomTroc-Project/?page=chat&id=<?= $conversation['user']['id'] ?>"
                        class="chat-list-item<?= ($receiverUser && $receiverUser['id'] == $conversation['user']['id']) ? ' chat-list-item-active' : '' ?>"
                    >

                        <img
                            src="/TomTroc-Project/public/img/avatars/<?= htmlspecialchars($conversation['user']['avatar']) ?>"
                            alt="<?= htmlspecialchars($conversation['user']['username']) ?>"
                            class="chat-list-avatar"
                        >

                        <div class="chat-list-info">

                            <div class="chat-list-top">

                                <p class="chat-list-username">
                                    <?= htmlspecialchars($conversation['user']['username']) ?>
                                </p>

                                <span class="chat-list-time">
                                    <?= htmlspecialchars(date('H:i', strtotime($conversation['last_message_at']))) ?>
                                </span>

                            </div>

                            <p class="chat-list-preview">
                                <?= htmlspecialchars($conversation['last_message']) ?>
                            </p>

                        </div>

                    </a>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

        <div class="chat-window">

       <?php if ($receiverUser): ?>

        <div class="chat-user">

            <img
                src="/TomTroc-Project/public/img/avatars/<?= htmlspecialchars($receiverUser['avatar']) ?>"
                alt="<?= htmlspecialchars($receiverUser['username']) ?>"
                class="chat-user-avatar"
            >

            <p class="chat-user-name">
                <?= htmlspecialchars($receiverUser['username']) ?>
            </p>

        </div>



        <div class="chat-messages">

            <?php foreach ($messages as $message): ?>

                <?php if ($message['sender_id'] == $userIdSender): ?>

                    <div class="message-sent">

                        <span class="message-date">
                            <?= htmlspecialchars(date('d.m H:i', strtotime($message['created_at']))) ?>
                        </span>

                        <p>
                            <?= htmlspecialchars($message['content']) ?>
                        </p>

                    </div>

                <?php else: ?>

                    <div class="message-received">

                        <div class="message-received-info">

                            <img
                                src="/TomTroc-Project/public/img/avatars/<?= htmlspecialchars($receiverUser['avatar']) ?>"
                                alt="<?= htmlspecialchars($receiverUser['username']) ?>"
                                class="message-avatar"
                            >

                            <span class="message-date">
                                <?= htmlspecialchars(date('d.m H:i', strtotime($message['created_at']))) ?>
                            </span>

                        </div>

                        <p>
                            <?= htmlspecialchars($message['content']) ?>
                        </p>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>


        <form
            method="POST"
            action="/TomTroc-Project/?page=chat&id=<?= $receiverUser['id'] ?>"
            class="chat-form"
        >

            <input
                type="text"
                name="content"
                placeholder="Tapez votre message ici"
                required
            >

            <button
                type="submit"
                name="btnSendMessage"
            >
                Envoyer
            </button>

        </form>

        <?php else: ?>

            <p>
                Sélectionnez une conversation.
            </p>

        <?php endif; ?>

        </div>

    </div>

</section>