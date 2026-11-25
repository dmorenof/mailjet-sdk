# Mailjet SDK for PHP: operations

151 operations. Each is a static method of a facade class (`MailjetSDK\...`); configure the SDK once with `MailjetAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Send an email message via Send API v3.1 | POST | `/v3.1/send` | `V31\Send::post()` |
| API Key List | GET | `/v3/REST/apikey` | `V3\REST\Apikey::get()` |
| Create API Key | POST | `/v3/REST/apikey` | `V3\REST\Apikey::post()` |
| API Key by ID | GET | `/v3/REST/apikey/{apikey_ID}` | `V3\REST\Apikey::getByApikeyID()` |
| Update API Key | PUT | `/v3/REST/apikey/{apikey_ID}` | `V3\REST\Apikey::putByApikeyID()` |
| API Key Totals | GET | `/v3/REST/apikeytotals` | `V3\REST\Apikeytotals::get()` |
| Bounce Statistics | GET | `/v3/REST/bouncestatistics` | `V3\REST\Bouncestatistics::get()` |
| Bounce Statistics by ID | GET | `/v3/REST/bouncestatistics/{message_ID}` | `V3\REST\Bouncestatistics::getByMessageID()` |
| Campaign List | GET | `/v3/REST/campaign` | `V3\REST\Campaign::get()` |
| Campaign by ID | GET | `/v3/REST/campaign/{campaign_ID}` | `V3\REST\Campaign::getByCampaignID()` |
| Update Campaign | PUT | `/v3/REST/campaign/{campaign_ID}` | `V3\REST\Campaign::putByCampaignID()` |
| Campaign Draft List | GET | `/v3/REST/campaigndraft` | `V3\REST\Campaigndraft::get()` |
| Create Campaign Draft | POST | `/v3/REST/campaigndraft` | `V3\REST\Campaigndraft::post()` |
| Campaign Draft by ID | GET | `/v3/REST/campaigndraft/{draft_ID}` | `V3\REST\Campaigndraft::getByDraftID()` |
| Update Campaign Draft | PUT | `/v3/REST/campaigndraft/{draft_ID}` | `V3\REST\Campaigndraft::putByDraftID()` |
| Get Campaign Draft: Detail Content | GET | `/v3/REST/campaigndraft/{draft_ID}/detailcontent` | `V3\REST\Campaigndraft\ByDraftID\Detailcontent::get()` |
| Campaign Draft: Detail Content | POST | `/v3/REST/campaigndraft/{draft_ID}/detailcontent` | `V3\REST\Campaigndraft\ByDraftID\Detailcontent::post()` |
| Delete Campaign Draft: Schedule | DELETE | `/v3/REST/campaigndraft/{draft_ID}/schedule` | `V3\REST\Campaigndraft\ByDraftID\Schedule::delete()` |
| Get Campaign Draft: Schedule | GET | `/v3/REST/campaigndraft/{draft_ID}/schedule` | `V3\REST\Campaigndraft\ByDraftID\Schedule::get()` |
| Campaign Draft: Schedule | POST | `/v3/REST/campaigndraft/{draft_ID}/schedule` | `V3\REST\Campaigndraft\ByDraftID\Schedule::post()` |
| Update Campaign Draft: Schedule | PUT | `/v3/REST/campaigndraft/{draft_ID}/schedule` | `V3\REST\Campaigndraft\ByDraftID\Schedule::put()` |
| Campaign Draft: Send | POST | `/v3/REST/campaigndraft/{draft_ID}/send` | `V3\REST\Campaigndraft\ByDraftID\Send::post()` |
| Get Campaign Draft: Status | GET | `/v3/REST/campaigndraft/{draft_ID}/status` | `V3\REST\Campaigndraft\ByDraftID\Status::get()` |
| Campaign Draft: Test | POST | `/v3/REST/campaigndraft/{draft_ID}/test` | `V3\REST\Campaigndraft\ByDraftID\Test::post()` |
| Campaign Graph Statistics | GET | `/v3/REST/campaigngraphstatistics` | `V3\REST\Campaigngraphstatistics::get()` |
| Campaign Graph Statistics by ID | GET | `/v3/REST/campaigngraphstatistics/{campaign_ID}` | `V3\REST\Campaigngraphstatistics::getByCampaignID()` |
| Campaign Overview List | GET | `/v3/REST/campaignoverview` | `V3\REST\Campaignoverview::get()` |
| Campaign Overview by ID | GET | `/v3/REST/campaignoverview/{ID}` | `V3\REST\Campaignoverview::getByID()` |
| Campaign Statistics | GET | `/v3/REST/campaignstatistics` | `V3\REST\Campaignstatistics::get()` |
| Campaign Statistics by ID | GET | `/v3/REST/campaignstatistics/{campaign_ID}` | `V3\REST\Campaignstatistics::getByCampaignID()` |
| Click Statistics | GET | `/v3/REST/clickstatistics` | `V3\REST\Clickstatistics::get()` |
| List Contacts | GET | `/v3/REST/contact` | `V3\REST\Contact::get()` |
| Create Contact | POST | `/v3/REST/contact` | `V3\REST\Contact::post()` |
| Contact: Manage Many Contacts | POST | `/v3/REST/contact/managemanycontacts` | `V3\REST\Contact\Managemanycontacts::post()` |
| Get Contact: Manage Many Contacts | GET | `/v3/REST/contact/managemanycontacts/{job_ID}` | `V3\REST\Contact\Managemanycontacts::getByJobID()` |
| Contact by ID | GET | `/v3/REST/contact/{contact_ID}` | `V3\REST\Contact::getByContactID()` |
| Update Contact | PUT | `/v3/REST/contact/{contact_ID}` | `V3\REST\Contact::putByContactID()` |
| Get Contact: Get Contact Lists | GET | `/v3/REST/contact/{contact_ID}/getcontactslists` | `V3\REST\Contact\ByContactID\Getcontactslists::get()` |
| Contact: Manage Contact Lists | POST | `/v3/REST/contact/{contact_ID}/managecontactslists` | `V3\REST\Contact\ByContactID\Managecontactslists::post()` |
| Contact Data | GET | `/v3/REST/contactdata` | `V3\REST\Contactdata::get()` |
| Delete Contact Data | DELETE | `/v3/REST/contactdata/{contact_ID}` | `V3\REST\Contactdata::deleteByContactID()` |
| Contact Data by ID | GET | `/v3/REST/contactdata/{contact_ID}` | `V3\REST\Contactdata::getByContactID()` |
| Update Contact Data | PUT | `/v3/REST/contactdata/{contact_ID}` | `V3\REST\Contactdata::putByContactID()` |
| Contact Filter List | GET | `/v3/REST/contactfilter` | `V3\REST\Contactfilter::get()` |
| Create Contact Filter | POST | `/v3/REST/contactfilter` | `V3\REST\Contactfilter::post()` |
| Delete Contact Filter | DELETE | `/v3/REST/contactfilter/{contactfilter_ID}` | `V3\REST\Contactfilter::deleteByContactfilterID()` |
| Contact Filter by ID | GET | `/v3/REST/contactfilter/{contactfilter_ID}` | `V3\REST\Contactfilter::getByContactfilterID()` |
| Update Contact Filter | PUT | `/v3/REST/contactfilter/{contactfilter_ID}` | `V3\REST\Contactfilter::putByContactfilterID()` |
| Contact Metadata List | GET | `/v3/REST/contactmetadata` | `V3\REST\Contactmetadata::get()` |
| Create Contact Metadata | POST | `/v3/REST/contactmetadata` | `V3\REST\Contactmetadata::post()` |
| Delete Contact Metadata | DELETE | `/v3/REST/contactmetadata/{contactmetadata_ID}` | `V3\REST\Contactmetadata::deleteByContactmetadataID()` |
| Contact Metadata by ID | GET | `/v3/REST/contactmetadata/{contactmetadata_ID}` | `V3\REST\Contactmetadata::getByContactmetadataID()` |
| Update Contact Metadata | PUT | `/v3/REST/contactmetadata/{contactmetadata_ID}` | `V3\REST\Contactmetadata::putByContactmetadataID()` |
| List Contact Lists | GET | `/v3/REST/contactslist` | `V3\REST\Contactslist::get()` |
| Create Contact List | POST | `/v3/REST/contactslist` | `V3\REST\Contactslist::post()` |
| Delete Contact List | DELETE | `/v3/REST/contactslist/{list_ID}` | `V3\REST\Contactslist::deleteByListID()` |
| Contact List by ID | GET | `/v3/REST/contactslist/{list_ID}` | `V3\REST\Contactslist::getByListID()` |
| Update Contact List | PUT | `/v3/REST/contactslist/{list_ID}` | `V3\REST\Contactslist::putByListID()` |
| Contact List: Import List | POST | `/v3/REST/contactslist/{list_ID}/importlist` | `V3\REST\Contactslist\ByListID\Importlist::post()` |
| Get Contact List: Import List | GET | `/v3/REST/contactslist/{list_ID}/importlist/{job_ID}` | `V3\REST\Contactslist\ByListID\Importlist::getByJobID()` |
| Contact List: Manage Contact | POST | `/v3/REST/contactslist/{list_ID}/managecontact` | `V3\REST\Contactslist\ByListID\Managecontact::post()` |
| Contact List: Manage Many Contacts | POST | `/v3/REST/contactslist/{list_ID}/managemanycontacts` | `V3\REST\Contactslist\ByListID\Managemanycontacts::post()` |
| Get Contact List: Manage Many Contacts | GET | `/v3/REST/contactslist/{list_ID}/managemanycontacts/{job_ID}` | `V3\REST\Contactslist\ByListID\Managemanycontacts::getByJobID()` |
| Contact List: Verify | POST | `/v3/REST/contactslist/{list_ID}/verify` | `V3\REST\Contactslist\ByListID\Verify::post()` |
| Get Contact List: Verify | GET | `/v3/REST/contactslist/{list_ID}/verify/{job_ID}` | `V3\REST\Contactslist\ByListID\Verify::getByJobID()` |
| Contact List Signup List | GET | `/v3/REST/contactslistsignup` | `V3\REST\Contactslistsignup::get()` |
| Contact List Signup by ID | GET | `/v3/REST/contactslistsignup/{signuprequest_ID}` | `V3\REST\Contactslistsignup::getBySignuprequestID()` |
| Contact Statistics List | GET | `/v3/REST/contactstatistics` | `V3\REST\Contactstatistics::get()` |
| Contact Statistics by ID | GET | `/v3/REST/contactstatistics/{contact_ID}` | `V3\REST\Contactstatistics::getByContactID()` |
| Create CSV Import | POST | `/v3/REST/csvimport` | `V3\REST\Csvimport::post()` |
| CSV Import by ID | GET | `/v3/REST/csvimport/{importjob_ID}` | `V3\REST\Csvimport::getByImportjobID()` |
| Update CSV Import | PUT | `/v3/REST/csvimport/{importjob_ID}` | `V3\REST\Csvimport::putByImportjobID()` |
| DNS List | GET | `/v3/REST/dns` | `V3\REST\Dns::get()` |
| DNS by ID | GET | `/v3/REST/dns/{dns_ID}` | `V3\REST\Dns::getByDnsID()` |
| DNS: Check | POST | `/v3/REST/dns/{dns_ID}/check` | `V3\REST\Dns\ByDnsID\Check::post()` |
| Domain Statistics | GET | `/v3/REST/domainstatistics` | `V3\REST\Domainstatistics::get()` |
| Event Callback URL List | GET | `/v3/REST/eventcallbackurl` | `V3\REST\Eventcallbackurl::get()` |
| Create Event Callback URL | POST | `/v3/REST/eventcallbackurl` | `V3\REST\Eventcallbackurl::post()` |
| Delete Event Callback URL | DELETE | `/v3/REST/eventcallbackurl/{url_ID}` | `V3\REST\Eventcallbackurl::deleteByUrlID()` |
| Event Callback URL by ID | GET | `/v3/REST/eventcallbackurl/{url_ID}` | `V3\REST\Eventcallbackurl::getByUrlID()` |
| Update Event Callback URL | PUT | `/v3/REST/eventcallbackurl/{url_ID}` | `V3\REST\Eventcallbackurl::putByUrlID()` |
| Graph Statistics | GET | `/v3/REST/graphstatistics` | `V3\REST\Graphstatistics::get()` |
| List Recipient List | GET | `/v3/REST/listrecipient` | `V3\REST\Listrecipient::get()` |
| Create List Recipient | POST | `/v3/REST/listrecipient` | `V3\REST\Listrecipient::post()` |
| Delete List Recipient | DELETE | `/v3/REST/listrecipient/{listrecipient_ID}` | `V3\REST\Listrecipient::deleteByListrecipientID()` |
| List Recipient by ID | GET | `/v3/REST/listrecipient/{listrecipient_ID}` | `V3\REST\Listrecipient::getByListrecipientID()` |
| Update List Recipient | PUT | `/v3/REST/listrecipient/{listrecipient_ID}` | `V3\REST\Listrecipient::putByListrecipientID()` |
| List Recipient Statistics | GET | `/v3/REST/listrecipientstatistics` | `V3\REST\Listrecipientstatistics::get()` |
| List Recipient Statistics by ID | GET | `/v3/REST/listrecipientstatistics/{listrecipient_ID}` | `V3\REST\Listrecipientstatistics::getByListrecipientID()` |
| List Statistics | GET | `/v3/REST/liststatistics` | `V3\REST\Liststatistics::get()` |
| List Statistics by ID | GET | `/v3/REST/liststatistics/{list_ID}` | `V3\REST\Liststatistics::getByListID()` |
| Message List | GET | `/v3/REST/message` | `V3\REST\Message::get()` |
| Message by ID | GET | `/v3/REST/message/{message_ID}` | `V3\REST\Message::getByMessageID()` |
| Message History by ID | GET | `/v3/REST/messagehistory/{message_ID}` | `V3\REST\Messagehistory::getByMessageID()` |
| Message Information | GET | `/v3/REST/messageinformation` | `V3\REST\Messageinformation::get()` |
| Message Information by ID | GET | `/v3/REST/messageinformation/{message_ID}` | `V3\REST\Messageinformation::getByMessageID()` |
| Message Statistics | GET | `/v3/REST/messagestatistics` | `V3\REST\Messagestatistics::get()` |
| Message Statistics by ID | GET | `/v3/REST/messagestatistics/{message_ID}` | `V3\REST\Messagestatistics::getByMessageID()` |
| Meta Sender List | GET | `/v3/REST/metasender` | `V3\REST\Metasender::get()` |
| Create Meta Sender | POST | `/v3/REST/metasender` | `V3\REST\Metasender::post()` |
| Meta Sender by ID | GET | `/v3/REST/metasender/{metasender_ID}` | `V3\REST\Metasender::getByMetasenderID()` |
| Update Metasender | PUT | `/v3/REST/metasender/{metasender_ID}` | `V3\REST\Metasender::putByMetasenderID()` |
| My Profile | GET | `/v3/REST/myprofile` | `V3\REST\Myprofile::get()` |
| Update My Profile | PUT | `/v3/REST/myprofile` | `V3\REST\Myprofile::put()` |
| Newsletter List | GET | `/v3/REST/newsletter` | `V3\REST\Newsletter::get()` |
| Create Newsletter | POST | `/v3/REST/newsletter` | `V3\REST\Newsletter::post()` |
| Newsletter by ID | GET | `/v3/REST/newsletter/{newsletter_ID}` | `V3\REST\Newsletter::getByNewsletterID()` |
| Update Newsletter | PUT | `/v3/REST/newsletter/{newsletter_ID}` | `V3\REST\Newsletter::putByNewsletterID()` |
| Delete Newsletter: Detail Content | DELETE | `/v3/REST/newsletter/{newsletter_ID}/detailcontent` | `V3\REST\Newsletter\ByNewsletterID\Detailcontent::delete()` |
| Get Newsletter: Detail Content | GET | `/v3/REST/newsletter/{newsletter_ID}/detailcontent` | `V3\REST\Newsletter\ByNewsletterID\Detailcontent::get()` |
| Newsletter: Detail Content | POST | `/v3/REST/newsletter/{newsletter_ID}/detailcontent` | `V3\REST\Newsletter\ByNewsletterID\Detailcontent::post()` |
| Update Newsletter: Detail Content | PUT | `/v3/REST/newsletter/{newsletter_ID}/detailcontent` | `V3\REST\Newsletter\ByNewsletterID\Detailcontent::put()` |
| Delete Newsletter: Schedule | DELETE | `/v3/REST/newsletter/{newsletter_ID}/schedule` | `V3\REST\Newsletter\ByNewsletterID\Schedule::delete()` |
| Get Newsletter: Schedule | GET | `/v3/REST/newsletter/{newsletter_ID}/schedule` | `V3\REST\Newsletter\ByNewsletterID\Schedule::get()` |
| Newsletter: Schedule | POST | `/v3/REST/newsletter/{newsletter_ID}/schedule` | `V3\REST\Newsletter\ByNewsletterID\Schedule::post()` |
| Update Newsletter: Schedule | PUT | `/v3/REST/newsletter/{newsletter_ID}/schedule` | `V3\REST\Newsletter\ByNewsletterID\Schedule::put()` |
| Newsletter: Send | POST | `/v3/REST/newsletter/{newsletter_ID}/send` | `V3\REST\Newsletter\ByNewsletterID\Send::post()` |
| Get Newsletter: Status | GET | `/v3/REST/newsletter/{newsletter_ID}/status` | `V3\REST\Newsletter\ByNewsletterID\Status::get()` |
| Newsletter: Test | POST | `/v3/REST/newsletter/{newsletter_ID}/test` | `V3\REST\Newsletter\ByNewsletterID\Test::post()` |
| Open Information | GET | `/v3/REST/openinformation` | `V3\REST\Openinformation::get()` |
| Open Information by ID | GET | `/v3/REST/openinformation/{message_ID}` | `V3\REST\Openinformation::getByMessageID()` |
| Open Statistics | GET | `/v3/REST/openstatistics` | `V3\REST\Openstatistics::get()` |
| Parse Route List | GET | `/v3/REST/parseroute` | `V3\REST\Parseroute::get()` |
| Create Parse Route | POST | `/v3/REST/parseroute` | `V3\REST\Parseroute::post()` |
| Delete Parse Route | DELETE | `/v3/REST/parseroute/{parseroute_ID}` | `V3\REST\Parseroute::deleteByParserouteID()` |
| Parse Route by ID | GET | `/v3/REST/parseroute/{parseroute_ID}` | `V3\REST\Parseroute::getByParserouteID()` |
| Update Parse Route | PUT | `/v3/REST/parseroute/{parseroute_ID}` | `V3\REST\Parseroute::putByParserouteID()` |
| Sender List | GET | `/v3/REST/sender` | `V3\REST\Sender::get()` |
| Create Sender | POST | `/v3/REST/sender` | `V3\REST\Sender::post()` |
| Delete Sender | DELETE | `/v3/REST/sender/{sender_ID}` | `V3\REST\Sender::deleteBySenderID()` |
| Sender by ID | GET | `/v3/REST/sender/{sender_ID}` | `V3\REST\Sender::getBySenderID()` |
| Update Sender | PUT | `/v3/REST/sender/{sender_ID}` | `V3\REST\Sender::putBySenderID()` |
| Sender: Validate | POST | `/v3/REST/sender/{sender_ID}/validate` | `V3\REST\Sender\BySenderID\Validate::post()` |
| Sender Statistics | GET | `/v3/REST/senderstatistics` | `V3\REST\Senderstatistics::get()` |
| Sender Statistics by ID | GET | `/v3/REST/senderstatistics/{sender_ID}` | `V3\REST\Senderstatistics::getBySenderID()` |
| Stat Counters List | GET | `/v3/REST/statcounters` | `V3\REST\Statcounters::get()` |
| Link Click Statistics | GET | `/v3/REST/statistics/link-click` | `V3\REST\Statistics\LinkClick::get()` |
| Recipient ESP Statistics | GET | `/v3/REST/statistics/recipient-esp` | `V3\REST\Statistics\RecipientEsp::get()` |
| Template List | GET | `/v3/REST/template` | `V3\REST\Template::get()` |
| Create Template | POST | `/v3/REST/template` | `V3\REST\Template::post()` |
| Delete Template | DELETE | `/v3/REST/template/{template_ID}` | `V3\REST\Template::deleteByTemplateID()` |
| Template by ID | GET | `/v3/REST/template/{template_ID}` | `V3\REST\Template::getByTemplateID()` |
| Update Template | PUT | `/v3/REST/template/{template_ID}` | `V3\REST\Template::putByTemplateID()` |
| Get Template: Detail Content | GET | `/v3/REST/template/{template_ID}/detailcontent` | `V3\REST\Template\ByTemplateID\Detailcontent::get()` |
| Template: Detail Content | POST | `/v3/REST/template/{template_ID}/detailcontent` | `V3\REST\Template\ByTemplateID\Detailcontent::post()` |
| Update Template: Detail Content | PUT | `/v3/REST/template/{template_ID}/detailcontent` | `V3\REST\Template\ByTemplateID\Detailcontent::put()` |
| Top Link Clicked List | GET | `/v3/REST/toplinkclicked` | `V3\REST\Toplinkclicked::get()` |
| User List | GET | `/v3/REST/user` | `V3\REST\User::get()` |
| Update User | PUT | `/v3/REST/user` | `V3\REST\User::put()` |
| User Agent Statistics | GET | `/v3/REST/useragentstatistics` | `V3\REST\Useragentstatistics::get()` |
| Send an email message via Send API v3 | POST | `/v3/send` | `V3\Send::post()` |
