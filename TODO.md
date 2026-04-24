# TODO: Add Category & Sub-Category to Inquiry Flow

## Database
- [ ] Create migration to add `category` and `sub_category` nullable columns to `inquiries` table

## Backend
- [ ] Update `Inquiry` model `$fillable` array
- [ ] Update `InquiryController::store()` to save `category` and `sub_category`

## Frontend - Inquiry Modal
- [ ] Update `components/inquiry-modal.blade.php` to add hidden inputs and JS for category/sub_category

## Frontend - Service Pages
- [ ] Update `services/tattos.blade.php` — pass `data-category="Tattoo"` and `data-sub-category`
- [ ] Update `services/Piercing.blade.php` — pass `data-category="Piercing"` and `data-sub-category`
- [ ] Update `services/makeover.blade.php` — pass `data-category="Makeover"` and `data-sub-category`

## CRM
- [ ] Update `crm/leads/all-leads.blade.php` — add Category, Sub Category, Service columns + combined format

