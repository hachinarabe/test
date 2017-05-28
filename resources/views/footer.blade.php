<p class="text-muted text-center">
    © {{ date_create('2017-01-01') < date_create()->modify('first day of January midnight')?
        sprintf('2017 - %s', date_create()->format('Y')) : '2017' }} hachinarabe
</p>
