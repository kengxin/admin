<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => \app\components\Left::getAdminLeft()
            ]
        ) ?>

    </section>

</aside>
