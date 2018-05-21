# Simple A/B Testing

With the Simple A/B Testing secript you can easily test a simple HTML website.

### Usage:

Add the pages you want to test to the array found in the index.html.

e.g `home.html` and `home2.html`

```
$testingPages = array(
	"a" => file\_get\_contents('a.html'),
	"b" => file\_get\_contents('b.html')
);
```

Next Add the `index.php` to the page you are testing.

In this case its the home page, so add it to the root of your website e.g `example.com`or `example.com/home`
