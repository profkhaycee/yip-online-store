<h1>Product List</h1>

{foreach from=$products item=product}
    <div>
        <h3>{$product.name}</h3>
        <p>Price: ₦{$product.price}</p>
    </div>
{/foreach}

<h3>tt PRoducts</h3>
<div> 
<strong>PRODUCTS:</strong><br>
<i>{$tt}</i>


</div>


<h3>ALL PRoducts</h3>
<div> 
<strong>PRODUCTS:</strong><br>
{foreach from=$all_products item=single_product}
    <li><img width="150" height="74" src="{$single_product.image}"> - {$single_product.name} </li>
    
{/foreach}
{* <i>{$all_products}</i> *}


</div>
