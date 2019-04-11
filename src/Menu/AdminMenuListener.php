<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $header = $menu->getChild('configuration');

        if (null !== $header) {
            $this->addChild($header);
        } else {
            $this->addChild($menu->getFirstChild());
        }
    }

    private function addChild(ItemInterface $item): void
    {
        $item
            ->addChild('requirements', [
                'route' => 'setono_sylius_shipping_requirements_admin_requirement_index',
            ])
            ->setLabel('setono_sylius_shipping_requirements.ui.requirements')
            ->setLabelAttribute('icon', 'check circle');
    }
}
