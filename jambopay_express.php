<?php
//make changes where applicable as directed by the documentation Express_Checkout_API_2.10Jxc.01.pdf
?>

<div style="width: 100">
	<input type="text" name="" value="Invoice"/><br><br>
<input type="text" name="email" value="email"/><br><br>
<input type="submit" name="submit" value="submits"/>
	

</div>
<form method="post" action="https://www.jambopay.com/JPExpress.aspx" target="_blank">
<input type="hidden" name="jp_item_type" value="cart"/>
<input type="hidden" name="jp_item_name" value="test shop"/>
<input type="hidden" name="order_id" value="455879"/>
<input type="hidden" name="jp_business" value="business@yourdomain.com"/>
<input type="hidden" name="jp_amount_1" value="51"/>
<input type="hidden" name="jp_amount_2" value="0"/>
<input type="hidden" name="jp_amount_5" value="0"/>
<input type="hidden" name="jp_payee" value="email@yourcustomer.com"/>
<input type="hidden" name="jp_shipping" value="company name"/>
<input type="hidden" name="jp_rurl" value="http://index.php/testpost/Result.aspx?ii=0"/>
<input type="hidden" name="jp_furl" value="http://www.yourwebsite.com/testpost/Result.aspx?ii=1"/>
<input type="hidden" name="jp_curl" value="http://www.yourwebsite.com/testpost/Result.aspx?ii=2"/>
<input type="image" src="https://www.jambopay.com/jp_image/paynow.png"/>
</form>
