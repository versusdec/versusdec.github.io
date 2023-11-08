<?php echo '<?xml version="1.0" encoding="utf-8"?>'?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <atom:link href="http://<?php echo $_SERVER['HTTP_HOST']; echo $this->lang == 'en'?'/en':''; ?>/feed/rss.xml" rel="self" type="application/rss+xml" />
        <title>Инфралекс</title>
        <description>
            <![CDATA[
            <?php if ($this->lang == 'en'){ ?>
                INFRALEX is a national law firm providing consulting and expert services in the field of law to public
                and private clients, providing representation and defense in courts in Russia and abroad
            <?php } else { ?>
                ИНФРАЛЕКС — национальная юридическая фирма, оказывающая консалтинговые и экспертные услуги в области
                права государственным и частным клиентам, осуществляющая представительство и защиту в судах в России и
                за рубежом
            <?php } ?>
            ]]>
        </description>
        <link>http://<?php echo $_SERVER['HTTP_HOST']; echo $this->lang == 'en'?'/en':''; ?>/blog/</link>
        <copyright>&#169;<?php echo date('Y')?> Инфралекс.</copyright>
        <language>en-us</language>
        <lastBuildDate><?php echo date('D, d M Y H:i:s O',time())?></lastBuildDate>
        <pubDate><?php echo date('D, d M Y H:i:s O',time())?></pubDate>
        <?php foreach ($articles as $article) {?>
            <item>
                <title><?php echo htmlspecialchars( $article->{'h1_'.$this->lang} )?></title>
                <description><![CDATA[
                    <?php echo $article->{'description_'.$this->lang}; ?>
                    ]]>
                </description>
                <link>http://<?php echo $_SERVER['HTTP_HOST']; echo $this->lang == 'en'?'/en':''; echo $article->url; ?></link>
                <guid isPermaLink="false"><?php echo $article->id; ?></guid>
                <pubDate><?php echo date('D, d M Y H:i:s O', strtotime($article->date))?></pubDate>
            </item>
        <?php }?>
    </channel>
</rss>