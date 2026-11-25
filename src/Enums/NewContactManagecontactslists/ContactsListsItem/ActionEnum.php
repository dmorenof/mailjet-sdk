<?php

declare(strict_types=1);

namespace MailjetSDK\Enums\NewContactManagecontactslists\ContactsListsItem;

enum ActionEnum: string
{
    case Addforce = 'addforce';
    case Addnoforce = 'addnoforce';
    case Remove = 'remove';
    case Unsub = 'unsub';
}
