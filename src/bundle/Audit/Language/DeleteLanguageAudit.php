<?php

namespace Edgar\EzUIAuditBundle\Audit\Language;

use Edgar\EzUIAudit\Audit\AbstractAudit;
use eZ\Publish\Core\SignalSlot\Signal;

class DeleteLanguageAudit extends AbstractAudit
{
    public function receive(Signal $signal)
    {
        if (!$signal instanceof Signal\LanguageService\DeleteLanguageSignal) {
            return;
        }
    }
}
