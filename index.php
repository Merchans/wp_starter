<?php get_header(); ?>

<body>
    <!-- Automatic column width ajust -->
    <div class="o-grid">
        <div class="o-grid__col o-box u-bg--main"></div>
    </div>

    <!-- Automatic two column with automatic width ajust -->
    <div class="o-grid">
        <div class="o-grid__col u-1/2 o-box u-bg--main"></div>
        <div class="o-grid__col u-1/2 o-box u-bg--gray"></div>
    </div>

    <!-- Four columns with defined width -->
    <div class="o-grid">
        <div class="o-grid__col u-1/4 o-box u-bg--main"></div>
        <div class="o-grid__col u-1/4 o-box u-bg--gray"></div>
        <div class="o-grid__col u-1/4 o-box u-bg--main"></div>
        <div class="o-grid__col u-1/4 o-box u-bg--gray"></div>
    </div>
</body>

<?php get_footer(); ?>
