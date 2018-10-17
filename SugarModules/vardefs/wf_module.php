<?php
// Generated by WFModule

/**
 * Workflow id
 */
$dictionary['Opportunity']['fields']['wf_id'] = array(
    'name' => 'wf_id',
    'vname' => 'LBL_WF_ID',
    'type' => 'id',
    'audited' => true,
);

/**
 * Status audit non-db field
 */
$dictionary['Opportunity']['fields']['wf_status_audit'] = array(
    'name' => 'wf_status_audit',
    'vname' => 'LBL_CONFIRM_LIST',
    'type' => 'WFStatusAudit',
    'source' => 'non-db',
);

/**
 * Status audit text field
 */
$dictionary['Opportunity']['fields']['confirm_list'] = array(
    'name' => 'confirm_list',
    'type' => 'text',
    'vname' => 'LBL_CONFIRM_LIST',
    'audited' => false,
    'massupdate' => false,
    'inline_edit' => false,
    'importable' => 'false',
);

/**
 * Current resolution non-db field
 */
$dictionary['Opportunity']['fields']['last_resolution'] = array(
    'name' => 'last_resolution',
    'type' => 'text',
    'source' => 'non-db',
    'audited' => false,
    'massupdate' => false,
);

/**
 * Confirm block
 */
$dictionary['Opportunity']['fields']['wf_confirm_block'] = array(
    'name' => 'wf_confirm_block',
    'vname' => 'LBL_CONFIRM_STATUS',
    'type' => 'text',
    'source' => 'non-db',
    'audited' => false,
    'massupdate' => false,
    'inline_edit' => false,
    'importable' => 'false',
    'function' => array(
        'include' => 'custom/include/Workflow/utils.php',
        'name' => 'wf_confirmBlock',
        'returns' => 'html',
    ),
    'studio' => true,
);

/**
 * Assign block
 */
$dictionary['Opportunity']['fields']['wf_assign_block'] = array(
    'name' => 'wf_assign_block',
    'vname' => 'LBL_ASSIGNED_CHANGE_TITLE',
    'type' => 'text',
    'source' => 'non-db',
    'audited' => false,
    'massupdate' => false,
    'inline_edit' => false,
    'importable' => 'false',
    'function' => array(
        'include' => 'custom/include/Workflow/utils.php',
        'name' => 'wf_assignBlock',
        'returns' => 'html',
    ),
    'studio' => true,
);

/**
 * Assigned users block
 */
$dictionary['Opportunity']['fields']['wf_assigned_block'] = array(
    'name' => 'wf_assigned_block',
    'vname' => 'LBL_ASSIGNEES',
    'type' => 'text',
    'source' => 'non-db',
    'audited' => false,
    'massupdate' => false,
    'inline_edit' => false,
    'importable' => 'false',
    'function' => array(
        'include' => 'custom/include/Workflow/utils.php',
        'name' => 'wf_assigneesBlock',
        'returns' => 'html',
    ),
    'studio' => true,
);
