<?php
 return array(
     'controllers' => array(
         'invokables' => array(
             'Ma\Controller\Ma' => 'Ma\Controller\MaController',
         ),
     ),

     // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'ma' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/ma[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Ma\Controller\Ma',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'ma' => __DIR__ . '/../view',
         ),
     ),
 );
