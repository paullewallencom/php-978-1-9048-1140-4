{include file="header.tpl"}
{include file="navigation.tpl" page_title="Contact Us"}

<form method="post" action="contact_us.php">
<p>
 <b>Your Name:</b><br />
 <input type="text" name="name" size="40">
</p>

<p>
 <b>Your Email:</b><br />
 <input type="text" name="email" size="40">
</p>

<p>
 <b>Your Message:</b><br />
 <textarea name="message" cols="40" rows="10"></textarea>
</p>

<input type="submit" value="Send Message">
</form>

{include file="footer.tpl"}
