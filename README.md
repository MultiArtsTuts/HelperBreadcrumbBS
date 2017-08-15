# Helper for Laravel 5.x

This Helper will have other functions later, but I created it mainly for an Automatic Breadcrumb so I do not have to get manually added as some package.

Imagine the situation where the customer creates other categories and will have to do everything manually by adding one by one? Tiring and time consuming.

You still have to improve a lot, so when you can help too.

Clone this repository in app folder.

```
git clone https://github.com/MultiArtsTuts/HelperBreadcrumbBS.git
```
Now add the helper in config/app to aliases.

```
'Helper' => App\Helpers\Helper::class,
```
#### How to use.
```
{!! Helper::BreadcrumbBS4() !!} For Bootstrap 4

{!! Helper::BreadcrumbBS3() !!} For Bootstrap 3
```

I hope it helps you, give your opinions and improvements.

## Donation
<a href='https://pag.ae/bmm5mbp'><img alt='Click here to lend your support to make a donation at pagseguro.com.br!' src='http://ap.imagensbrasil.org/images/banners_250x250px_PAGSEGURO.jpg' border='0' ></a>

Att;

João Mello
