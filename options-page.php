<style type="text/css">
		.sprite { position: relative; float: left; margin-right: 5px; }
		.sprite-YandexVerification { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -0px; }
		.sprite-GooglVerification { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -16px; }
		.sprite-BingVerification { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -32px; }
		.sprite-YandexMetrika { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -48px; }
		.sprite-GoogleAnalytics { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -64px; }
		.sprite-MailVerification { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -80px; }
		.sprite-MailTop { width: 16px; height: 16px; background:url(<?php echo plugins_url('dl-verification/sprites.png') ?>) no-repeat -0px -96px; }
	</style>
<div class="wrap">

<h2>DL Verification</h2>
<form method="post" action="options.php">
    <?php settings_fields( 'dl-settings-group' ); ?>
	
	<?php settings_errors(); ?>	
	
    <table class="form-table">
    
	<tr valign="top">
        <th scope="row"><div class="sprite sprite-YandexVerification"></div> Яндекс.Вебмастер</th>
        <td><input type="text" name="YandexVerification" value="<?php echo get_option('YandexVerification'); ?>" />
		<code>&lt;meta name="yandex-verification" content="<?php echo get_option('YandexVerification'); ?>" /&gt;</code> - этот код добавлен в head сайта
		<p class="description">
			<b>Яндекс.Вебмастер</b> — это сервис, предоставляющий информацию о том, как индексируются ваши сайты. Он позволяет сообщить Яндексу о новых и удаленных страницах, настроить индексирование сайта и улучшить представление сайта в результатах поиска.
		</p>
		<p>
			<a href="http://webmaster.yandex.ru/sites/" target="_blank">Мои сайты</a> | 
			<a href="http://webmaster.yandex.ru/site/add.xml" target="_blank">Добавить сайт</a>
		</p>
	</td></tr>

	
	<tr valign="top">
		<th scope="row"><div class="sprite sprite-YandexMetrika"></div> Яндекс.Метрика</th>
		<td><textarea name="YandexMetrika" class="large-text code" type="textarea" rows="7"><?php echo get_option('YandexMetrika'); ?></textarea>
		<p class="description">
			<b>Яндекс.Метрика</b> — бесплатный инструмент для повышения конверсии сайта. Наблюдайте за ключевыми показателями эффективности сайта, анализируйте поведение посетителей, оценивайте отдачу от рекламных кампаний.
		</p>
		<p>
			<a href="https://metrika.yandex.ru/list/" target="_blank">Все cчётчики</a> | 
			<a href="https://metrika.yandex.ru/add/" target="_blank">Добавить счётчик</a> | 
			<a href="https://metrika.yandex.ru/stat/?counter_id=5265289" target="_blank">Демо-доступ без регистрации</a>
		</p>
	</td></tr>
	
	
    <tr valign="top">
        <th scope="row"><div class="sprite sprite-GooglVerification"></div> Google нструменты</th>
        <td><input type="text" name="GooglVerification" value="<?php echo get_option('GooglVerification'); ?>" />
		<code>&lt;meta name="google-site-verification" content="<?php echo get_option('GooglVerification'); ?>" /&gt;</code> - этот код добавлен в head сайта
		<p class="description">
			<b>Google Инструменты</b> для веб-мастеров предоставляют подробные отчеты о частоте показа ваших страниц в Google.
		</p>
		<p>
			<a href="https://www.google.com/webmasters/tools/" target="_blank">Мои сайты</a>
		</p>
	</td></tr>

	
	<tr valign="top">
		<th scope="row"><div class="sprite sprite-GoogleAnalytics"></div> Google Analytics</th>
		<td><textarea name="GoogleAnalytics" class="large-text code" type="textarea" rows="7"><?php echo get_option('GoogleAnalytics'); ?></textarea>
		<p class="description">
			<b>Google Analytics</b> позволяет оценивать рентабельность инвестиций, отслеживать Flash- и видеорекламу, а также распространение контента в приложениях и социальных сетях.
		</p>
		<p>
			<a href="https://www.google.com/analytics/web/" target="_blank">Все аккаунты</a> | 
			<a href="https://www.google.com/analytics/web/?hl=ru&pli=1#management/Settings/a34977198w62688226p64265043/%3Fm.page%3DNewAccount/" target="_blank">Создать новый аккаунт</a>
		</p>
	</td></tr>

	
    <tr valign="top">
        <th scope="row"><div class="sprite sprite-MailVerification"></div> Mail веб-мастер</th>
        <td><input type="text" name="MailVerification" value="<?php echo get_option('MailVerification'); ?>" />
		<code>&lt;meta name="wmail-verification" content="<?php echo get_option('MailVerification'); ?>" /&gt;</code> - этот код добавлен в head сайта
		<p class="description">
			<b>Кабинет вебмастера Mail</b> — сервис, позволяющий взглянуть на ваш сайт глазами Поиска@Mail.Ru и сделать его более привлекательными для пользователей
		</p>
		<p>
			<a href="http://webmaster.mail.ru/" target="_blank">Мои сайты</a>
		</p>
	</td></tr>	


	<tr valign="top">
		<th scope="row"><div class="sprite sprite-MailTop"></div> Рейтинг Mail</th>
		<td><textarea name="MailTop" class="large-text code" type="textarea" rows="7"><?php echo get_option('MailTop'); ?></textarea>
		<p class="description">
			<b>Рейтинг Mail.ru</b> — это система статистики для владельцев сайтов. Для сбора данных необходимо получить и установить на страницы вашего сайта код счетчика.
		</p>
		<p>
			<a href="http://top.mail.ru/mycounters/" target="_blank">Мои счетчики </a> | 
			<a href="http://top.mail.ru/add/" target="_blank">Зарегистрировать новый сайт</a>
		</p>
	</td></tr>

	
    <tr valign="top">
        <th scope="row"><div class="sprite sprite-BingVerification"></div> Bing веб-мастер</th>
        <td><input type="text" name="BingVerification" value="<?php echo get_option('BingVerification'); ?>" />
		<code>&lt;meta name="msvalidate.01" content="<?php echo get_option('BingVerification'); ?>" /&gt;</code> - этот код добавлен в head сайта
		<p class="description"><b>Bing Webmaster Tools</b> — средства веб-мастера, позволяющие собирать статистику, анализировать трафик, следить за индексацией, отслеживать ссылки, удалять или добавлять страницы.</p>
		<p><a href="https://ssl.bing.com/webmaster/home/" target="_blank">Мои сайты</a> | <a href="https://ssl.bing.com/webmaster/home/addsite" target="_blank">Добавить сайт</a></p>
	</td></tr>

	</table>
    
    <p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>