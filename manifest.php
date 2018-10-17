<?php
$MODULE = 'Opportunities';

$manifest = array(
    'name' => 'workflow-opportunities',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'hardsoft321',
    'description' => 'Workflow-WF support for Opportunities module',
    'is_uninstallable' => true,
    'published_date' => '2018-10-16',
    'type' => 'module',
    'dependencies' => array(
        array(
            'id_name' => 'Workflow-WF',
            'version' => '0'
        ),
    ),
    'version' => '1.0.0',
);
$installdefs = array(
    'id' => 'workflow-opportunities',
    'language' => array(
        array (
            'from' => '<basepath>/SugarModules/language/application/ru_ru.lang.php',
            'to_module' => 'application',
            'language' => 'ru_ru',
        ),
        array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
    ),
    'logic_hooks' => array(
        array(
            'module' => $MODULE,
            'hook' => 'before_save',
            'order' => 99,
            'description' => 'WFModule: Check before save record',
            'file' => 'custom/include/Workflow/WF_hooks.php',
            'class' => 'WF_hooks',
            'function' => 'before_save',
        ),
        array(
            'module' => $MODULE,
            'hook' => 'after_save',
            'order' => 99,
            'description' => 'WFModule: Run after save function',
            'file' => 'custom/include/Workflow/WF_hooks.php',
            'class' => 'WF_hooks',
            'function' => 'after_save',
        ),
    ),
    'vardefs' => array(
        array(
            'from' => '<basepath>/SugarModules/vardefs/wf_module.php',
            'to_module' => $MODULE,
        ),
        array(
            'from' => '<basepath>/SugarModules/vardefs/wf_workflow.php',
            'to_module' => $MODULE,
        ),
    ),
);
