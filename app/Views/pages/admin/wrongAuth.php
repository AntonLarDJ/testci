<h1>У вас нет доступа</h1>
<script>
    let url = "<?= site_url() ?>";
    setTimeout(function() {
        window.location.href = url;
    }, 1000);
</script>