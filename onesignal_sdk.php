<?php
    require __DIR__ . '/config.php';
?>

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
<script>
window.OneSignal = window.OneSignal || [];
OneSignal.push(function() {
    OneSignal.init({
    appId: "<?= $app_id ?>",
    });
});
</script>