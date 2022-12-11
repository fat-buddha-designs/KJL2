<ul>
    <li class="is--bold"><?= html($site->companyname()) ?></li>
    <li><?= html($site->street()) ?></li>
    <li><?= html($site->village()) ?></li>
    <li><?= html($site->city()) ?></li>
    <li><?= html($site->county()) ?></li>
    <li><?= html($site->postcode()) ?></li>
    <li><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M0 64H512v80L256 320 0 144V64zM0 448V182.8L237.9 346.4 256 358.8l18.1-12.5L512 182.8V448H0z"/></svg><script>document.write('<a href="mailto:' + first + '@' + last + '">' + first + '@' + last + '<\/a>');</script></li>
    <li><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M0 32L144 0l80 144-83.8 67c36.1 68.4 92.3 124.6 160.8 160.8L368 288l144 80L480 512H448C200.6 512 0 311.4 0 64L0 32z"/></svg><?= html::tel($site->phone()) ?></li>
    <li><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M0 32L144 0l80 144-83.8 67c36.1 68.4 92.3 124.6 160.8 160.8L368 288l144 80L480 512H448C200.6 512 0 311.4 0 64L0 32z"/></svg><?= html::tel($site->mobile()) ?></li>
</ul>