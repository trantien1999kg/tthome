<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    var OneSignal = OneSignal || [];
    OneSignal.push(['init', {
        appId: 'f88f9984-f472-45b8-a70a-d3a9bb526c34',
        // safari_web_id: 'SAFARI_WEB_ID',
        autoRegister: true,
        subdomainName: "https://<?=$config_url?>",
        notifyButton: {
            enable: true,
            size: 'small',
            position: 'bottom-left',
            prenotify: true,
            showCredit: true,
            text: {
                'tip.state.unsubscribed': 'Đăng ký nhận thông báo',
                'tip.state.subscribed': 'Bạn đã đăng ký nhận thông báo',
                'tip.state.blocked': 'Bạn đã chặn hiển thị thông báo',
                'message.prenotify': 'Click để đăng ký nhận thông báo',
                'message.action.subscribed': 'Cảm ơn bạn đã đăng ký!',
                'message.action.resubscribed': 'Bạn đã đăng ký nhận thông báo',
                'message.action.unsubscribed': 'Bạn đã hủy đăng ký nhận thông báo',
                'dialog.main.title': 'Quản lý thông báo',
                'dialog.main.button.subscribe': 'ĐĂNG KÝ',
                'dialog.main.button.unsubscribe': 'HỦY ĐĂNG KÝ',
                'dialog.blocked.title': 'Bỏ chặn thông báo',
                'dialog.blocked.message': 'Thực hiện các hướng dẫn sau để cho phép thông báo:'
            }
        },
        welcomeNotification: {
            title: '',
            message: ''
        },
        promptOptions: {
            siteName: '<?=$row_setting['ten_'.$lang]?>',
            actionMessage: 'Chúng tôi muốn hiển thị thông báo cho bạn khi có bài viết hoặc cập nhật mới.',
            exampleNotificationTitle: 'Thông báo mẫu',
            exampleNotificationMessage: 'Ví dụ cách thông báo sẽ hiển thị',
            exampleNotificationCaption: 'Bạn có thể dừng nhận thông báo bất kỳ lúc nào',
            acceptButtonText: 'CHO PHÉP',
            cancelButtonText: 'BỎ QUA'
        }

    }]);

</script>
<script>
    function subscribe() {
        OneSignal.push(["registerForPushNotifications"]);
        event.preventDefault();
    }
    function unsubscribe(){
        OneSignal.setSubscription(true);
    }
        var OneSignal = OneSignal || [];
        OneSignal.push(function() {
            OneSignal.on('subscriptionChange', function (isSubscribed) {
            console.log("The user's subscription state is now:", isSubscribed);
            OneSignal.sendTag("user_id","4444", function(tagsSent)
            {
                console.log("Tags have finished sending!");
            });
        });
        var isPushSupported = OneSignal.isPushNotificationsSupported();
            if (isPushSupported)
                {
                    // Push notifications are supported
                    OneSignal.isPushNotificationsEnabled().then(function(isEnabled)
                    {
                        if (isEnabled)
                        {
                            console.log("Push notifications are enabled!");

                        } else {
                            OneSignal.showHttpPrompt();
                            console.log("Push notifications are not enabled yet.");
                        }
                    });

            } else {
                    console.log("Push notifications are not supported.");
            }
        });
</script>