<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel" style="text-align: center">
            
            <div style="color: #ffffff">
                <b>Calendra</b>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
        </ul>
        <?php

        use hscstudio\mimin\components\Mimin;
        $menuItems = backend\components\SidebarMenu::getMenu();

        //$menuItems = Mimin::filterMenu($menuItems);

        ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => $menuItems,
            ]
        ) ?>

    </section>

</aside>
