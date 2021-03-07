<?php

namespace {
    class CVoteAdminQuestionEdit extends \CBitrixComponent
    {
        /** @var int */
        protected static $questionNumber = 0;
        /** @var \Bitrix\Vote\Vote */
        protected $vote;
        /** @var int */
        protected $voteId;
        /** @var int */
        protected $questionId;
        /** @var array */
        protected $question = [];
        /** @var  ErrorCollection */
        protected $errorCollection;
        /** @var array */
        protected $answers = [];
        /**@var \Bitrix\Vote\Component\VoteQuestionEditGrid*/
        protected $answerGrid;
        public function __construct($component = \null)
        {
        }
        public function executeComponent()
        {
        }
        /**
         * Returns whether this is an AJAX (XMLHttpRequest) request.
         * @return boolean
         */
        protected function isAjaxRequest()
        {
        }
        /**
         * @return Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
         */
        protected function getApplication()
        {
        }
        /**
         * @return array|bool|\CAllUser|\CUser
         */
        protected function getUser()
        {
        }
        protected function prepareParams()
        {
        }
        protected function processAction()
        {
        }
        protected function adjustGrid(array $answers)
        {
        }
    }
}
namespace Bitrix\Vote\Component {
    class Log implements \ArrayAccess
    {
        /*
         * @var \CBXVirtualFileFileSystem $file
         */
        protected $file = null;
        var $data = array();
        /**
         * Log constructor.
         * @param string $path Path to log file.
         * @return void
         */
        function __construct($path)
        {
        }
        /**
         * Saves log.
         * @param string $key Key of log array.
         * @param mixed $value value of log array.
         * @throws NotImplementedException
         * @return $this
         */
        public function setLog($key, $value)
        {
        }
        public function isExists()
        {
        }
        /**
         * @param $key
         * @return mixed
         */
        public function getValue($key)
        {
        }
        /**
         * @throws NotImplementedException
         * @return void
         */
        public function save()
        {
        }
        /**
         * @return array
         */
        public function getLog()
        {
        }
        /**
         *
         */
        public function unlink()
        {
        }
        /**
         * @return void
         */
        public function clear()
        {
        }
        /**
         * @param mixed $offset
         * @return bool
         */
        public function offsetExists($offset)
        {
        }
        /**
         * @param mixed $offset
         * @return mixed|null
         */
        public function offsetGet($offset)
        {
        }
        /**
         * @param mixed $offset
         * @param mixed $value
         * @throws NotImplementedException
         */
        public function offsetSet($offset, $value)
        {
        }
        /**
         * @param mixed $offset
         * @throws NotImplementedException
         */
        public function offsetUnset($offset)
        {
        }
    }
    class VoteQuestionEditGrid
    {
        /** @var string */
        protected $gridId = 'grid_vote_answer';
        /** @var string */
        protected $id;
        /** @var array */
        protected $data = array();
        /** @var Log */
        protected $log;
        /** @var int */
        protected $maxId = 0;
        /** @var  ErrorCollection */
        protected $errorCollection;
        /** @var string */
        protected $logDirectiory;
        public function __construct(string $id)
        {
        }
        /**
         * @return string
         */
        public function getGridId()
        {
        }
        public function getGridInstanceId()
        {
        }
        private function getNextId()
        {
        }
        /**
         * @return \Application|\Bitrix\Main\HttpApplication|\CAllMain|\CMain
         */
        protected function getApplication()
        {
        }
        /**
         * @return array
         */
        public function restore()
        {
        }
        public function merge(array $data)
        {
        }
        /**
         * @param $id
         */
        public function clear($id = null)
        {
        }
        public function processAction()
        {
        }
        public function prepare()
        {
        }
        public function get()
        {
        }
        /**
         * @param array $data
         * @return string|bool
         */
        public function add(array $data)
        {
        }
        /**
         * @param $id
         * @param array $data
         * @return bool
         */
        public function update($id, array $data, $files = null)
        {
        }
        /**
         * @param $id
         * @return bool
         */
        public function delete($id)
        {
        }
        /**
         * @param $id
         * @return bool
         */
        public function cancel($id)
        {
        }
    }
}