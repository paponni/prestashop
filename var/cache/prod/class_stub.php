<?php

class CMSRole extends CMSRoleCore {};
class CMS extends CMSCore {};
class Tag extends TagCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class Country extends CountryCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CartChecksum extends CartChecksumCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class Feature extends FeatureCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class CustomerSession extends CustomerSessionCore {};
class LocalizationPack extends LocalizationPackCore {};
class Language extends LanguageCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class RequestSql extends RequestSqlCore {};
class Combination extends CombinationCore {};
class Carrier extends CarrierCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Category extends CategoryCore {};
class CustomizationField extends CustomizationFieldCore {};
class ProductAssembler extends ProductAssemblerCore {};
class SearchEngine extends SearchEngineCore {};
class Message extends MessageCore {};
class Customer extends CustomerCore {};
class Translate extends TranslateCore {};
class Notification extends NotificationCore {};
class Context extends ContextCore {};
class Page extends PageCore {};
class Manufacturer extends ManufacturerCore {};
class GroupReduction extends GroupReductionCore {};
class Store extends StoreCore {};
class AttributeGroup extends AttributeGroupCore {};
class Delivery extends DeliveryCore {};
class Address extends AddressCore {};
class DateRange extends DateRangeCore {};
class Cookie extends CookieCore {};
class Attachment extends AttachmentCore {};
class SpecificPrice extends SpecificPriceCore {};
class Curve extends CurveCore {};
class Mail extends MailCore {};
class Employee extends EmployeeCore {};
class Uploader extends UploaderCore {};
class ImageManager extends ImageManagerCore {};
class Connection extends ConnectionCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class Hook extends HookCore {};
class Supplier extends SupplierCore {};
class AddressFormat extends AddressFormatCore {};
class ProductDownload extends ProductDownloadCore {};
class Contact extends ContactCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Tab extends TabCore {};
abstract class ObjectModel extends ObjectModelCore {};
class OrderStateLang extends OrderStateLangCore {};
class CarrierLang extends CarrierLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class ProfileLang extends ProfileLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class CategoryLang extends CategoryLangCore {};
class GroupLang extends GroupLangCore {};
class RiskLang extends RiskLangCore {};
class GenderLang extends GenderLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class MetaLang extends MetaLangCore {};
class FeatureLang extends FeatureLangCore {};
class ContactLang extends ContactLangCore {};
class TabLang extends TabLangCore {};
class ThemeLang extends ThemeLangCore {};
class AttributeLang extends AttributeLangCore {};
class DataLang extends DataLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class Profile extends ProfileCore {};
class Meta extends MetaCore {};
class AddressChecksum extends AddressChecksumCore {};
class Customization extends CustomizationCore {};
class PhpEncryption extends PhpEncryptionCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class Tree extends TreeCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Risk extends RiskCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class SupplyOrder extends SupplyOrderCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockMvtReason extends StockMvtReasonCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class Warehouse extends WarehouseCore {};
class StockMvtWS extends StockMvtWSCore {};
class Stock extends StockCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockMvt extends StockMvtCore {};
class StockAvailable extends StockAvailableCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class FormField extends FormFieldCore {};
class CustomerThread extends CustomerThreadCore {};
class Guest extends GuestCore {};
class CSV extends CSVCore {};
class Product extends ProductCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class TemplateFinder extends TemplateFinderCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class Alias extends AliasCore {};
class Upgrader extends UpgraderCore {};
class Referrer extends ReferrerCore {};
abstract class Cache extends CacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheApc extends CacheApcCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheMemcache extends CacheMemcacheCore {};
class TaxRule extends TaxRuleCore {};
class TaxCalculator extends TaxCalculatorCore {};
class Tax extends TaxCore {};
class TaxConfiguration extends TaxConfigurationCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class ProductSupplier extends ProductSupplierCore {};
class CartRule extends CartRuleCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class CMSCategory extends CMSCategoryCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Validate extends ValidateCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class CustomerAddress extends CustomerAddressCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Group extends GroupCore {};
class CustomerMessage extends CustomerMessageCore {};
class ImageType extends ImageTypeCore {};
class Access extends AccessCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Windows extends WindowsCore {};
class FeatureValue extends FeatureValueCore {};
class Configuration extends ConfigurationCore {};
class AdminController extends AdminControllerCore {};
abstract class Controller extends ControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class ProductSale extends ProductSaleCore {};
class Pack extends PackCore {};
class ShopGroup extends ShopGroupCore {};
class Shop extends ShopCore {};
class ShopUrl extends ShopUrlCore {};
class LinkProxy extends LinkProxyCore {};
class State extends StateCore {};
class Link extends LinkCore {};
class Cart extends CartCore {};
class DbPDO extends DbPDOCore {};
class DbQuery extends DbQueryCore {};
abstract class Db extends DbCore {};
class DbMySQLi extends DbMySQLiCore {};
class CssMinifier extends CssMinifierCore {};
class JsMinifier extends JsMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CccReducer extends CccReducerCore {};
class Currency extends CurrencyCore {};
class QuickAccess extends QuickAccessCore {};
class FileUploader extends FileUploaderCore {};
class Attribute extends AttributeCore {};
class Zone extends ZoneCore {};
class Search extends SearchCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Chart extends ChartCore {};
class SupplierAddress extends SupplierAddressCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Gender extends GenderCore {};
class Tools extends ToolsCore {};
class Dispatcher extends DispatcherCore {};
class Media extends MediaCore {};
class EmployeeSession extends EmployeeSessionCore {};
class OrderDetail extends OrderDetailCore {};
class Order extends OrderCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderReturn extends OrderReturnCore {};
class OrderSlip extends OrderSlipCore {};
class OrderState extends OrderStateCore {};
class OrderMessage extends OrderMessageCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderReturnState extends OrderReturnStateCore {};
class Image extends ImageCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperKpi extends HelperKpiCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperForm extends HelperFormCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperView extends HelperViewCore {};
class Helper extends HelperCore {};
class HelperList extends HelperListCore {};
class HelperShop extends HelperShopCore {};
