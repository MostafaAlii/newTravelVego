<?php
namespace App\Providers;
use App\Interfaces\Groups\GroupRepositoryInterface;
use App\Repository\Groups\GroupRepository;
use App\Interfaces\Categories\CategoryRepositoryInterface;
use App\Repository\Categories\CategoryRepository;
use App\Interfaces\SubCategories\SubCategoryRepositoryInterface;
use App\Repository\SubCategories\SubCategoryRepository;
use App\Interfaces\CountryCode\CountryCodeInterface;
use App\Repository\CountryCode\CountryCodeRepository;
use App\Interfaces\Countries\CountryRepositoryInterface;
use App\Repository\Countries\CountriesRepository;
use App\Interfaces\Currencies\CurrencRepositoryInterface;
use App\Repository\Currencies\CurrencyRepository;
use App\Interfaces\Provinces\ProvinceRepositoryInterface;
use App\Repository\Provinces\ProvinceRepository;
use App\Interfaces\Areas\AreaRepositoryInterface;
use App\Repository\Areas\AreaRepository;
use App\Interfaces\Cities\CityRepositoryInterface;
use App\Repository\Cities\CityRepository;
use App\Interfaces\Suppliers\SupplierRepositoryInterface;
use App\Repository\Suppliers\SupplierRepository;
use App\Interfaces\Sections\SectionsRepositoryInterface;
use App\Repository\Sections\SectionsRepository;
use App\Interfaces\ServicePrices\ServicePricesRepositoryInterface;
use App\Repository\ServicePrices\ServicePricesRepository;
use App\Interfaces\Appointments\AppointmentRepositoryInterface;
use App\Repository\Appointments\AppointmentRepository;
use App\Interfaces\Products\ProductRepositoryInterface;
use App\Repository\Products\ProductRepository;
use App\Interfaces\Attributes\AttributeRepositoryInterface;
use App\Repository\Attributes\AttributeRepository;
use App\Interfaces\AttrOptions\AttrOptionRepositoryInterface;
use App\Repository\AttrOptions\AttroptionRepository;
use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(SubCategoryRepositoryInterface::class, SubCategoryRepository::class);
        $this->app->bind(CountryCodeInterface::class, CountryCodeRepository::class);
        $this->app->bind(CountryRepositoryInterface::class, CountriesRepository::class);
        $this->app->bind(CurrencRepositoryInterface::class, CurrencyRepository::class);
        $this->app->bind(ProvinceRepositoryInterface::class, ProvinceRepository::class);
        $this->app->bind(AreaRepositoryInterface::class, AreaRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(SupplierRepositoryInterface::class, SupplierRepository::class);
        $this->app->bind(SectionsRepositoryInterface::class, SectionsRepository::class);
        $this->app->bind(ServicePricesRepositoryInterface::class, ServicePricesRepository::class);
        $this->app->bind(AttributeRepositoryInterface::class, AttributeRepository::class);
        $this->app->bind(AttrOptionRepositoryInterface::class, AttroptionRepository::class);
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
