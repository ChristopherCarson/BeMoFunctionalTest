<script>
    //Start Section for Google Analytics
    var script = document.createElement('script');
    script.src = "https://www.googletagmanager.com/gtag/js?id=" + gaID;
    document.getElementsByTagName('script')[0].parentNode.appendChild(script);

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', gaID);
</script>