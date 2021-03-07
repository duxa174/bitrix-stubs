<?php

namespace Bitrix\Sale\Exchange\OneC;

class DocumentImportFactory
{
    /** Create new document import by specified document type ID.
     * @static
     * @param int $documentTypeID Document type ID.
     * @return DocumentBase
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     */
    public static function create($documentTypeID)
    {
    }
}