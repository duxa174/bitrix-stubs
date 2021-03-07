<?php

class LearnException extends \Exception
{
    const EXC_ERR_ALL_LOGIC = 0x100;
    // Logic error
    const EXC_ERR_ALL_GIVEUP = 0x1000;
    // Any fatal error, on which called method gives up
    const EXC_ERR_ALL_PARAMS = 0x2000;
    // At least one of params is out of admitted range
    const EXC_ERR_ALL_ACCESS_DENIED = 0x10000;
    // Access denied during some operation
    const EXC_ERR_ALL_NOT_EXISTS = 0x20000;
    // Item not exists
    // Graph relations
    const EXC_ERR_GR_LINK = 0x1;
    // GraphRelation error: unable to link edge
    const EXC_ERR_GR_UNLINK = 0x2;
    // GraphRelation error: unable to unlink edge
    const EXC_ERR_GR_SET_PROPERTY = 0x4;
    // GraphRelation error: unable to set property
    const EXC_ERR_GR_GET_PROPERTY = 0x8;
    // GraphRelation error: unable to get property value
    const EXC_ERR_GR_GET_NEIGHBOURS = 0x800;
    // GraphRelation error: unable to list neighbours
    const EXC_ERR_GR_UPDATE = 0x4000;
    // GraphRelation error: unable to update link parametres
    // Graph nodes
    const EXC_ERR_GN_CREATE = 0x10;
    // GraphNode error: unable to create graph node
    const EXC_ERR_GN_UPDATE = 0x80;
    // GraphNode error: unable to update graph node
    const EXC_ERR_GN_REMOVE = 0x200;
    // GraphNode error: unable to remove graph node
    const EXC_ERR_GN_GETBYID = 0x400;
    // GraphNode error: unable to get graph node by id
    const EXC_ERR_GN_CHECK_PARAMS = 0x20;
    // GraphNode error: failed when params checked
    const EXC_ERR_GN_FILE_UPLOAD = 0x40;
    // GraphNode error: file uploading failure
    // CLearnPath
    const EXC_ERR_LP_BROKEN_PATH = 0x8000;
    // broken path
    // CLearnLesson
    const EXC_ERR_LL_UNREMOVABLE_CL = 0x40000;
    // lesson is unremovable, because linked course is unremovable
    // nextID = 0x0080000
    // Redefine the exception to log exceptions
    public function __construct($message = \null, $code = 0)
    {
    }
    protected function learning_log_exception($message, $code, $line, $file, $backtrace)
    {
    }
}