<?php

namespace Bitrix\Forum\Comments;

class Feed extends \Bitrix\Forum\Comments\BaseObject
{
    const ERROR_PARAMS_MESSAGE = 'params0004';
    const ERROR_PERMISSION = 'params0005';
    private function checkTopic()
    {
    }
    /**
     * Returns true if entity allows adding
     * @return bool
     */
    public function canAdd()
    {
    }
    /**
     * Returns true if entity allows reading
     * @return bool
     */
    public function canRead()
    {
    }
    /**
     * Returns true if entity allows editing
     * @return bool
     */
    public function canEdit()
    {
    }
    /**
     * @param integer $commentId Message ID in b_forum_message to edit.
     * @return bool
     */
    public function canEditComment($commentId)
    {
    }
    /**
     * Returns true if entity allows deleting.
     * @return bool
     */
    public function canDelete()
    {
    }
    /**
     * @param  integer $commentId Message ID in b_forum_message to delete.
     * @return bool
     */
    public function canDeleteComment($commentId)
    {
    }
    /**
     * @return bool
     */
    public function canModerate()
    {
    }
    /**
     * @return bool
     */
    public function canEditOwn()
    {
    }
    /**
     * Add a comment
     * @param array $params Fields for new message to add in table b_forum_message.
     * @return array|bool
     */
    public function add(array $params)
    {
    }
    /**
     * Edit a comment
     * @param integer $id Message id.
     * @param array $params Fields to edit message.
     * @return array|bool
     */
    public function edit($id, array $params)
    {
    }
    /**
     * Delete a comment
     * @param integer $id Message id.
     * @return array|bool
     */
    public function delete($id)
    {
    }
    /**
     * Moderate comment with id
     * @param integer $id Message id.
     * @param boolean $show State for moderating: true - show, false - hide.
     * @return array|bool
     */
    public function moderate($id, $show)
    {
    }
    /**
     * Mainly this function for forum entity. In this case params have to from the list: A < E < I < M < Q < U < Y
     * A - NO ACCESS		E - READ			I - ANSWER
     * M - NEW TOPIC		Q - MODERATE	U - EDIT			Y - FULL_ACCESS
     * @param string $permission A,E,I,M,Q,U,Y.
     * @return $this
     */
    public function setPermission($permission)
    {
    }
    /**
     * @param boolean $allow True or false.
     * @return $this
     */
    public function setEditOwn($allow)
    {
    }
    /**
     * Returns permission From list: A < E < I < M < Q < U < Y.
     * @return string
     */
    public function getPermission()
    {
    }
}