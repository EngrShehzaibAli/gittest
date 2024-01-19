<!-- message/message.tpl -->
<!DOCTYPE html>
<html>
<head>
    <title>Display Posts</title>
</head>
<body>

{if isset($curl_output.products)}
    {foreach $curl_output.products as $product}
        <div>
            <h2>{$product.title}</h2>
            <p>Description: {$product.description}</p>
            <p>Price: {$product.price}</p>
            <!-- Add other product details as needed -->


            <hr>
        </div>
    {/foreach}
{else}
    <p>No products available.</p>
{/if}


</body>
</html>
