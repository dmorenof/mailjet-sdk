<?php

declare(strict_types=1);

namespace MailjetSDK\DTOs\GetV3;

final class TemplateQueryParams extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Retrieves information only about templates, which have the respective categories assigned. You can separate multiple categories with a comma. When selecting multiple categories, use the `CategoriesSelectionMethod` to specify the relation between between the selected ones and the template's list of categories.
     */
    public string $Categories;
    /**
     * Describes the relation between the value of the `Categories` query parameter and the template's list of categories.
     *
     * Possible values:
     *
     * - `containsany`
     * - `containsall`
     * - `issubset`
     *
     * Default value: `containsany`
     *
     */
    public string $CategoriesSelectionMethod;
    /**
     * Retrieves information only about templates with the specified mode of editing:
     *
     * - `1` - Passport drag-and-drop builder
     * - `2` - Passport HTML builder
     * - `3` - Passport Saved Section (snippet) builder
     * - `4` - Passport MJML builder
     *
     */
    public int $EditMode;
    /**
     * Limit the response to a select number of returned objects.
     *
     * Default value: `10`. Maximum value: `1000`
     *
     */
    public int $Limit;
    /**
     * Retrieves information only about templates with the specified name.
     */
    public string $Name;
    /**
     * Retrieve a list of objects starting from a certain offset. Combine this query parameter with `Limit` to retrieve a specific section of the list of objects.
     *
     * Default value: `0`
     *
     */
    public int $Offset;
    /**
     * Retrieves information only about templates with the specified owner type.
     *
     * Possible values:
     *
     * - `apikey` - Templates and their content can be retrieved, edited and used only by the API Key they were created from.
     * - `user` - Templates created by the Primary API Key. Templates and their content can be retrieved by the Primary API Key, as well as all subaccount API Keys. However, they can be edited and used only by the Primary API Key.
     * - `global` - Generic templates created by Mailjet visible in the Passport Template Gallery.
     *
     */
    public string $OwnerType;
    /**
     * Retrieves information only about templates, which have the respective purposes assigned. You can separate multiple purposes with a comma. When selecting multiple purposes, use the `PurposesSelectionMethod` to specify the relation between between the selected ones and the template's list of purposes.
     *
     * Possible values:
     *
     * - `marketing`
     * - `transactional`
     * - `automation`
     *
     */
    public string $Purposes;
    /**
     * Describes the relation between the value of the `Purposes` query parameter and the template's list of purposes.
     *
     * Possible values:
     *
     * - `containsany`
     * - `containsall`
     * - `issubset`
     *
     */
    public string $PurposesSelectionMethod;
    /**
     * Specify a property name for this query parameter to sort the objects in `Data`. By default the sorting is ascending. When a property name is postfixed with DESC (i.e. `property_name+DESC`), the sort order will be descending.
     *
     * Note: Both the `Sort` query parameter and the option to select a descending order are not available for every property.
     *
     */
    public string $Sort;
    /**
     * Set the value of this query parameter to `1` to retrieve the overall number of objects returned by this request for your API Key. No list of results will be returned - the objects will simply be counted.
     *
     * Default value: `0`
     *
     * Note: When you send a request without the `countOnly` query parameter, `Count` and `Total` will only return the number of extracted elements and not the overall number.
     *
     */
    public bool $countOnly;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Categories' => is_string($value) ? $this->Categories = $value : parent::assignMember($name, $value),
            'CategoriesSelectionMethod' => is_string($value) ? $this->CategoriesSelectionMethod = $value : parent::assignMember($name, $value),
            'EditMode' => is_int($value) ? $this->EditMode = $value : parent::assignMember($name, $value),
            'Limit' => is_int($value) ? $this->Limit = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Offset' => is_int($value) ? $this->Offset = $value : parent::assignMember($name, $value),
            'OwnerType' => is_string($value) ? $this->OwnerType = $value : parent::assignMember($name, $value),
            'Purposes' => is_string($value) ? $this->Purposes = $value : parent::assignMember($name, $value),
            'PurposesSelectionMethod' => is_string($value) ? $this->PurposesSelectionMethod = $value : parent::assignMember($name, $value),
            'Sort' => is_string($value) ? $this->Sort = $value : parent::assignMember($name, $value),
            'countOnly' => is_bool($value) ? $this->countOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
