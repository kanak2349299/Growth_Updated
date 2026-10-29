<?php

$topicForBlog = static function ($blog): array {
    $title = strtolower((string) $blog->title);
    $text = strtolower(strip_tags((string) $blog->title . ' ' . (string) $blog->blogdetails));

    if (
        strpos($title, 'process safety') !== false
        || (strpos($title, 'energy management') === false && strpos($text, 'process safety') !== false)
        || strpos($text, 'hazard') !== false
    ) {
        return ['key' => 'safety', 'label' => 'Process Safety'];
    }

    if (
        strpos($title, 'operational excellence') !== false
        || strpos($title, 'continuous improvement') !== false
        || strpos($text, 'operational excellence') !== false
    ) {
        return ['key' => 'operations', 'label' => 'Operational Excellence'];
    }

    if (
        strpos($title, 'esg') !== false
        || strpos($title, 'sustainability') !== false
        || strpos($title, 'net zero') !== false
        || strpos($title, 'climate') !== false
        || strpos($title, 'carbon') !== false
    ) {
        return ['key' => 'esg', 'label' => 'ESG & Sustainability'];
    }

    if (strpos($text, 'energy') !== false || strpos($text, 'renewable') !== false) {
        return ['key' => 'energy', 'label' => 'Energy Management'];
    }

    return ['key' => 'business', 'label' => 'Business Insights'];
};

$excerptForBlog = static function ($blog): string {
    $plainText = html_entity_decode(
        strip_tags((string) $blog->blogdetails),
        ENT_QUOTES | ENT_HTML5,
        'UTF-8'
    );
    $words = preg_split('/\s+/', trim($plainText), -1, PREG_SPLIT_NO_EMPTY) ?: [];

    return implode(' ', array_slice($words, 0, 32)) . (count($words) > 32 ? '...' : '');
};

$imageForBlog = static function ($blog): ?string {
    $image = basename(trim((string) $blog->image));

    if ($image === '' || ! is_file(FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'blogs' . DIRECTORY_SEPARATOR . $image)) {
        return null;
    }

    return base_url('uploads/blogs/' . rawurlencode($image));
};

$formatBlogDate = static function ($blog): string {
    $timestamp = strtotime((string) $blog->blogdate);

    return $timestamp === false ? '' : date('d M Y', $timestamp);
};

$featuredBlog = $allblogs[0] ?? null;
$gridBlogs = array_slice($allblogs, 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php' ?>
    <style>
        .resources-page {
            --resources-ink: #173534;
            --resources-muted: #667976;
            --resources-green: #23765e;
            --resources-line: #e1e9e5;
            color: var(--resources-ink);
        }

        .resources-page [hidden] {
            display: none !important;
        }

        .resources-hero {
            position: relative;
            overflow: hidden;
            margin-top: 30px;
            padding: 82px 0 78px;
            background: #f1f5ef;
        }

        .resources-hero::after {
            position: absolute;
            top: -180px;
            right: -95px;
            width: 500px;
            height: 500px;
            border: 1px solid rgba(35, 118, 94, .14);
            border-radius: 50%;
            box-shadow: 0 0 0 46px rgba(35, 118, 94, .035), 0 0 0 92px rgba(35, 118, 94, .025);
            content: "";
            pointer-events: none;
        }

        .resources-hero .container {
            position: relative;
            z-index: 1;
        }

        .resources-kicker,
        .resource-eyebrow {
            color: var(--resources-green);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .resources-hero h1 {
            max-width: 790px;
            margin: 16px auto 17px;
            color: var(--resources-ink);
            font-size: clamp(38px, 5vw, 64px);
            font-weight: 600;
            letter-spacing: -.045em;
            line-height: 1.08;
        }

        .resources-hero .hero-copy {
            max-width: 660px;
            margin: 0 auto 31px;
            color: #526763;
            font-size: 17px;
            line-height: 1.75;
        }

        .resources-search {
            display: flex;
            width: min(100%, 670px);
            gap: 10px;
            margin: 0 auto;
            padding: 7px;
            border: 1px solid #dce6df;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 12px 35px rgba(23, 53, 52, .08);
        }

        .resources-search input {
            min-width: 0;
            height: 48px;
            flex: 1;
            padding: 0 13px;
            border: 0;
            background: transparent;
            color: var(--resources-ink);
            outline-offset: 2px;
        }

        .resources-search button,
        .resource-feature-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 6px;
            background: var(--resources-green);
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: background .2s ease, transform .2s ease;
        }

        .resources-search button {
            min-width: 112px;
            padding: 0 18px;
        }

        .resources-search button:hover,
        .resource-feature-link:hover {
            transform: translateY(-1px);
            background: #185b48;
            color: #fff;
        }

        .resources-content {
            padding: 75px 0 82px;
        }

        .resources-section-heading {
            margin-bottom: 25px;
        }

        .resources-section-heading h2 {
            margin: 8px 0 8px;
            color: var(--resources-ink);
            font-size: clamp(28px, 3vw, 38px);
            font-weight: 600;
            letter-spacing: -.03em;
        }

        .resources-section-heading p {
            margin: 0;
            color: var(--resources-muted);
        }

        .resource-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
            margin: 0 0 32px;
        }

        .resource-filter {
            padding: 9px 15px;
            border: 1px solid var(--resources-line);
            border-radius: 30px;
            background: #fff;
            color: #455d58;
            cursor: pointer;
            font-size: 13px;
            transition: border-color .2s ease, background .2s ease, color .2s ease;
        }

        .resource-filter:hover,
        .resource-filter.active {
            border-color: var(--resources-ink);
            background: var(--resources-ink);
            color: #fff;
        }

        .resource-featured {
            display: grid;
            min-height: 355px;
            grid-template-columns: 1.05fr .95fr;
            overflow: hidden;
            margin-bottom: 58px;
            border: 1px solid var(--resources-line);
            border-radius: 12px;
            background: #f6f8f5;
        }

        .resource-feature-copy {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: clamp(28px, 5vw, 58px);
        }

        .resource-feature-copy h2 {
            margin: 13px 0 14px;
            color: var(--resources-ink);
            font-size: clamp(25px, 3vw, 36px);
            font-weight: 600;
            letter-spacing: -.035em;
            line-height: 1.2;
        }

        .resource-feature-copy p {
            margin: 0 0 20px;
            color: var(--resources-muted);
            line-height: 1.75;
        }

        .resource-meta {
            margin-bottom: 21px;
            color: #71817c;
            font-size: 13px;
        }

        .resource-feature-link {
            min-height: 45px;
            padding: 0 18px;
        }

        .resource-feature-media,
        .resource-card-media {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #dbe8df, #afc9bc);
        }

        .resource-feature-media {
            min-height: 300px;
        }

        .resource-feature-media img,
        .resource-card-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .resource-feature-media img {
            position: absolute;
            inset: 0;
        }

        .resource-image-placeholder {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at 72% 24%, rgba(255,255,255,.45), transparent 27%),
                linear-gradient(135deg, #dce9df, #afc9bc);
        }

        .resource-image-placeholder::before,
        .resource-image-placeholder::after {
            position: absolute;
            width: 210px;
            height: 210px;
            border: 1px solid rgba(35, 118, 94, .2);
            border-radius: 50%;
            content: "";
        }

        .resource-image-placeholder::after {
            width: 145px;
            height: 145px;
        }

        .resource-image-placeholder span {
            z-index: 1;
            color: #2e705c;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
        }

        .resources-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .resource-card {
            display: flex;
            min-width: 0;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid var(--resources-line);
            border-radius: 10px;
            background: #fff;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .resource-card:hover {
            transform: translateY(-4px);
            border-color: #cadbd1;
            box-shadow: 0 15px 34px rgba(23, 53, 52, .09);
        }

        .resource-card-media {
            display: block;
            height: 218px;
        }

        .resource-card:hover .resource-card-media img,
        .resource-featured:hover .resource-feature-media img {
            transform: scale(1.035);
        }

        .resource-card-copy {
            display: flex;
            flex: 1;
            flex-direction: column;
            align-items: flex-start;
            padding: 23px 23px 25px;
        }

        .resource-card-copy h3 {
            margin: 10px 0 11px;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.35;
        }

        .resource-card-copy h3 a {
            color: var(--resources-ink);
            text-decoration: none;
        }

        .resource-card-copy p {
            margin: 0 0 17px;
            color: var(--resources-muted);
            font-size: 14px;
            line-height: 1.7;
        }

        .resource-card-copy .resource-meta {
            margin-top: auto;
            margin-bottom: 15px;
        }

        .resource-card-link {
            color: var(--resources-green);
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        .resource-empty,
        .resource-notice {
            padding: 28px;
            border: 1px solid var(--resources-line);
            border-radius: 9px;
            color: var(--resources-muted);
            text-align: center;
        }

        .resource-notice {
            margin: 10px 0 28px;
            background: #f6f8f5;
        }

        .resource-contact {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            margin-top: 58px;
            padding: 30px 34px;
            border-radius: 10px;
            background: #edf3ee;
        }

        .resource-contact h2 {
            margin: 0 0 5px;
            color: var(--resources-ink);
            font-size: 22px;
            font-weight: 600;
        }

        .resource-contact p {
            margin: 0;
            color: var(--resources-muted);
        }

        .resource-contact .resource-feature-link {
            flex: 0 0 auto;
        }

        @media (max-width: 991px) {
            .resources-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 767px) {
            .resources-hero {
                margin-top: 20px;
                padding: 58px 0 55px;
            }

            .resources-hero::after {
                right: -300px;
            }

            .resources-content {
                padding: 54px 0 60px;
            }

            .resource-featured {
                grid-template-columns: 1fr;
            }

            .resource-feature-media {
                min-height: 230px;
                grid-row: 1;
            }

            .resource-feature-copy {
                padding: 28px;
            }

            .resource-contact {
                align-items: flex-start;
                flex-direction: column;
                padding: 25px;
            }
        }

        @media (max-width: 575px) {
            .resources-search {
                flex-direction: column;
            }

            .resources-search button {
                min-height: 46px;
            }

            .resource-filters {
                gap: 7px;
            }

            .resource-filter {
                padding: 8px 11px;
                font-size: 12px;
            }

            .resources-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .resource-card-media {
                height: 205px;
            }
        }
    </style>
</head>

<body class="home-solar resources-page">
    <?php include 'includes/header.php' ?>

    <main>
        <section class="resources-hero text-center" aria-labelledby="resources-title">
            <div class="container">
                <span class="resources-kicker">Growth / Perspectives</span>
                <h1 id="resources-title">Ideas for a more resilient future.</h1>
                <p class="hero-copy">
                    Practical perspectives on sustainability, energy and operational performance
                    for the people shaping what comes next.
                </p>
                <form class="resources-search" action="<?php echo esc(base_url('resources')) ?>" method="get" role="search">
                    <label class="sr-only" for="resourceSearch">Search Growth resources</label>
                    <input
                        type="search"
                        name="q"
                        id="resourceSearch"
                        placeholder="Search articles, topics or authors"
                        value="<?php echo esc($searchQuery) ?>">
                    <button type="submit">Search</button>
                </form>
            </div>
        </section>

        <section class="resources-content" aria-labelledby="resources-library-title">
            <div class="container">
                <div class="resources-section-heading">
                    <span class="resources-kicker">The knowledge library</span>
                    <h2 id="resources-library-title">Explore our latest thinking</h2>
                </div>

                <?php if ($resourceDbError): ?>
                    <div class="resource-notice" role="status">
                        <?php if (ENVIRONMENT === 'development'): ?>
                            Published blogs and articles could not be loaded. Configure a local database connection and confirm that <code>xyz_blogs</code> exists.
                        <?php else: ?>
                            Articles are temporarily unavailable. Please try again later.
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="resource-filters" aria-label="Select resource format">
                    <button type="button" class="resource-filter active" data-type="all" aria-pressed="true">All formats</button>
                    <button type="button" class="resource-filter" data-type="whitepaper" aria-pressed="false">Whitepapers</button>
                    <button type="button" class="resource-filter" data-type="blog" aria-pressed="false">Blogs</button>
                    <button type="button" class="resource-filter" data-type="video" aria-pressed="false">Videos</button>
                    <button type="button" class="resource-filter" data-type="webinar" aria-pressed="false">Webinars</button>
                    <button type="button" class="resource-filter" data-type="case-study" aria-pressed="false">Case studies</button>
                </div>
                <div class="resource-filters" aria-label="Filter blogs and articles by topic">
                    <button type="button" class="resource-filter active" data-filter="all" aria-pressed="true">All topics</button>
                    <button type="button" class="resource-filter" data-filter="esg" aria-pressed="false">ESG &amp; sustainability</button>
                    <button type="button" class="resource-filter" data-filter="energy" aria-pressed="false">Energy management</button>
                    <button type="button" class="resource-filter" data-filter="safety" aria-pressed="false">Process safety</button>
                    <button type="button" class="resource-filter" data-filter="operations" aria-pressed="false">Operational excellence</button>
                    <button type="button" class="resource-filter" data-filter="business" aria-pressed="false">Business insights</button>
                </div>

                <?php if ($featuredBlog !== null): ?>
                    <?php
                    $featureTopic = $topicForBlog($featuredBlog);
                    $featureUrl = base_url('blog/' . rawurlencode((string) $featuredBlog->blogslug));
                    $featureImage = $imageForBlog($featuredBlog);
                    $featureSearch = strtolower(
                        strip_tags((string) $featuredBlog->title . ' ' . (string) $featuredBlog->blogdetails . ' ' . (string) $featuredBlog->writer . ' ' . $featureTopic['label'])
                    );
                    ?>
                    <article
                        class="resource-featured resource-filterable"
                        data-category="<?php echo esc($featureTopic['key']) ?>"
                        data-type="blog"
                        data-search="<?php echo esc($featureSearch) ?>">
                        <div class="resource-feature-copy">
                            <span class="resource-eyebrow">Featured blog / article · <?php echo esc($featureTopic['label']) ?></span>
                            <h2><?php echo esc((string) $featuredBlog->title) ?></h2>
                            <p><?php echo esc($excerptForBlog($featuredBlog)) ?></p>
                            <div class="resource-meta">
                                <?php if (trim((string) $featuredBlog->writer) !== ''): ?>
                                    <?php echo esc((string) $featuredBlog->writer) ?>
                                <?php endif; ?>
                                <?php if ($formatBlogDate($featuredBlog) !== ''): ?>
                                    <?php if (trim((string) $featuredBlog->writer) !== ''): ?>&nbsp; · &nbsp;<?php endif; ?>
                                    <?php echo esc($formatBlogDate($featuredBlog)) ?>
                                <?php endif; ?>
                            </div>
                            <a class="resource-feature-link" href="<?php echo esc($featureUrl) ?>">Read the article <span aria-hidden="true">&nbsp;→</span></a>
                        </div>
                        <a class="resource-feature-media" href="<?php echo esc($featureUrl) ?>" tabindex="-1" aria-hidden="true">
                            <?php if ($featureImage !== null): ?>
                                <img src="<?php echo esc($featureImage) ?>" alt="" loading="lazy">
                            <?php else: ?>
                                <span class="resource-image-placeholder"><span>Growth insights</span></span>
                            <?php endif; ?>
                        </a>
                    </article>
                <?php elseif (! $resourceDbError): ?>
                    <div class="resource-notice" role="status">
                        <?php if ($searchQuery !== ''): ?>
                            No published articles match “<?php echo esc($searchQuery) ?>”. Try another search.
                        <?php else: ?>
                            No published articles are available yet. Please check back soon.
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($gridBlogs !== []): ?>
                    <div class="resources-grid" id="resourceGrid">
                        <?php foreach ($gridBlogs as $blog): ?>
                            <?php
                            $topic = $topicForBlog($blog);
                            $blogUrl = base_url('blog/' . rawurlencode((string) $blog->blogslug));
                            $blogImage = $imageForBlog($blog);
                            $searchText = strtolower(
                                strip_tags((string) $blog->title . ' ' . (string) $blog->blogdetails . ' ' . (string) $blog->writer . ' ' . $topic['label'])
                            );
                            ?>
                            <article
                                class="resource-card resource-filterable"
                                data-category="<?php echo esc($topic['key']) ?>"
                                data-type="blog"
                                data-search="<?php echo esc($searchText) ?>">
                                <a class="resource-card-media" href="<?php echo esc($blogUrl) ?>" tabindex="-1" aria-hidden="true">
                                    <?php if ($blogImage !== null): ?>
                                        <img src="<?php echo esc($blogImage) ?>" alt="" loading="lazy">
                                    <?php else: ?>
                                        <span class="resource-image-placeholder"><span>Growth insights</span></span>
                                    <?php endif; ?>
                                </a>
                                <div class="resource-card-copy">
                                    <span class="resource-eyebrow">Blog / Article · <?php echo esc($topic['label']) ?></span>
                                    <h3><a href="<?php echo esc($blogUrl) ?>"><?php echo esc((string) $blog->title) ?></a></h3>
                                    <p><?php echo esc($excerptForBlog($blog)) ?></p>
                                    <div class="resource-meta">
                                        <?php if (trim((string) $blog->writer) !== ''): ?>
                                            <?php echo esc((string) $blog->writer) ?>
                                        <?php endif; ?>
                                        <?php if ($formatBlogDate($blog) !== ''): ?>
                                            <?php if (trim((string) $blog->writer) !== ''): ?>&nbsp; · &nbsp;<?php endif; ?>
                                            <?php echo esc($formatBlogDate($blog)) ?>
                                        <?php endif; ?>
                                    </div>
                                    <a class="resource-card-link" href="<?php echo esc($blogUrl) ?>">Read article <span aria-hidden="true">→</span></a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ($allblogs !== []): ?>
                    <div class="resource-empty" id="resourceEmpty" role="status" hidden>
                        No matching articles. Try another search or topic.
                    </div>
                <?php endif; ?>

                <div class="resources-grid extra-resource-grid">
                    <article class="resource-card resource-filterable" data-category="esg" data-type="webinar" data-search="gcc esg governance webinar future of sustainability upcoming">
                        <a class="resource-card-media" href="<?php echo esc(base_url('resources?q=webinar')) ?>" tabindex="-1" aria-hidden="true">
                            <span class="resource-image-placeholder"><span>Webinars soon</span></span>
                        </a>
                        <div class="resource-card-copy">
                            <span class="resource-eyebrow">Webinars · coming soon</span>
                            <h3><a href="<?php echo esc(base_url('contact')) ?>">Upcoming Growth webinars</a></h3>
                            <p>Growth's webinar programme is being prepared. Contact our team to register interest; confirmed topics and dates will be published here.</p>
                            <div class="resource-meta">Events &amp; webinars</div>
                            <a class="resource-card-link" href="<?php echo esc(base_url('contact')) ?>">Register interest <span aria-hidden="true">→</span></a>
                        </div>
                    </article>

                    <article class="resource-card resource-filterable" data-category="energy" data-type="case-study" data-search="energy savings case study case-study operational resilience efficiency">
                        <a class="resource-card-media" href="<?php echo esc(base_url('resources?q=case-study')) ?>" tabindex="-1" aria-hidden="true">
                            <span class="resource-image-placeholder"><span>Case study</span></span>
                        </a>
                        <div class="resource-card-copy">
                            <span class="resource-eyebrow">Case study · Energy management</span>
                            <h3><a href="<?php echo esc(base_url('contact')) ?>">Energy management case studies</a></h3>
                            <p>Client-approved examples will be added with verified project context and outcomes. Contact Growth to discuss relevant experience.</p>
                            <div class="resource-meta">Client stories · shared with permission</div>
                            <a class="resource-card-link" href="<?php echo esc(base_url('contact')) ?>">Ask Growth <span aria-hidden="true">→</span></a>
                        </div>
                    </article>

                    <article class="resource-card resource-filterable" data-category="operations" data-type="case-study" data-search="continuous improvement operational excellence transformation case study case-study">
                        <a class="resource-card-media" href="<?php echo esc(base_url('resources?q=case-study')) ?>" tabindex="-1" aria-hidden="true">
                            <span class="resource-image-placeholder"><span>Case study</span></span>
                        </a>
                        <div class="resource-card-copy">
                            <span class="resource-eyebrow">Case study · Operational excellence</span>
                            <h3><a href="<?php echo esc(base_url('contact')) ?>">Sustainability and operational excellence cases</a></h3>
                            <p>Verified Growth client stories will be published with client approval. Request a conversation for examples relevant to your sector.</p>
                            <div class="resource-meta">Client stories · shared with permission</div>
                            <a class="resource-card-link" href="<?php echo esc(base_url('contact')) ?>">Request an example <span aria-hidden="true">→</span></a>
                        </div>
                    </article>

                    <article class="resource-card resource-filterable" data-category="esg" data-type="whitepaper" data-search="whitepaper esg readiness governance reporting guide coming soon">
                        <a class="resource-card-media" href="<?php echo esc(base_url('contact')) ?>" tabindex="-1" aria-hidden="true">
                            <span class="resource-image-placeholder"><span>Whitepapers</span></span>
                        </a>
                        <div class="resource-card-copy">
                            <span class="resource-eyebrow">Whitepapers · in development</span>
                            <h3><a href="<?php echo esc(base_url('contact')) ?>">ESG readiness and governance guide</a></h3>
                            <p>Growth's downloadable guide is being prepared. Contact the team to register interest in its release.</p>
                            <div class="resource-meta">Guides &amp; tools</div>
                            <a class="resource-card-link" href="<?php echo esc(base_url('contact')) ?>">Register interest <span aria-hidden="true">→</span></a>
                        </div>
                    </article>

                    <article class="resource-card resource-filterable" data-category="business" data-type="video" data-search="video explainers growth sustainability energy coming soon">
                        <a class="resource-card-media" href="<?php echo esc(base_url('contact')) ?>" tabindex="-1" aria-hidden="true">
                            <span class="resource-image-placeholder"><span>Videos</span></span>
                        </a>
                        <div class="resource-card-copy">
                            <span class="resource-eyebrow">Videos · coming soon</span>
                            <h3><a href="<?php echo esc(base_url('contact')) ?>">Growth explainers and expert conversations</a></h3>
                            <p>Video resources will be published here as Growth-approved explainers and recordings become available.</p>
                            <div class="resource-meta">Videos &amp; explainers</div>
                            <a class="resource-card-link" href="<?php echo esc(base_url('contact')) ?>">Explore Growth services <span aria-hidden="true">→</span></a>
                        </div>
                    </article>
                </div>

                <aside class="resource-contact" aria-label="Contact Growth">
                    <div>
                        <h2>Turning insight into action?</h2>
                        <p>Talk with our team about your organisation's sustainability and operational goals.</p>
                    </div>
                    <a class="resource-feature-link" href="<?php echo esc(base_url('contact')) ?>">Talk to our team</a>
                </aside>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/footerjs.php' ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const allFilters = document.querySelectorAll('.resource-filter');
            const categoryFilters = document.querySelectorAll('.resource-filter[data-filter]');
            const typeFilters = document.querySelectorAll('.resource-filter[data-type]');
            const articles = document.querySelectorAll('.resource-filterable');
            const searchInput = document.getElementById('resourceSearch');
            const emptyMessage = document.getElementById('resourceEmpty');
            let activeCategory = 'all';
            let activeType = 'all';

            function filterArticles() {
                const query = searchInput.value.trim().toLowerCase();
                let visibleCount = 0;

                articles.forEach(function (article) {
                    const categoryMatches = activeCategory === 'all' || article.dataset.category === activeCategory;
                    const typeMatches = activeType === 'all' || (article.dataset.type || 'blog') === activeType;
                    const searchMatches = query === '' || (article.dataset.search || '').includes(query);
                    const visible = categoryMatches && typeMatches && searchMatches;

                    article.hidden = !visible;
                    if (visible) {
                        visibleCount++;
                    }
                });

                if (emptyMessage) {
                    emptyMessage.hidden = visibleCount !== 0;
                }
            }

            categoryFilters.forEach(function (button) {
                button.addEventListener('click', function () {
                    activeCategory = button.dataset.filter || 'all';
                    categoryFilters.forEach(function (filterButton) {
                        const selected = filterButton === button;
                        filterButton.classList.toggle('active', selected);
                        filterButton.setAttribute('aria-pressed', selected ? 'true' : 'false');
                    });
                    filterArticles();
                });
            });

            typeFilters.forEach(function (button) {
                button.addEventListener('click', function () {
                    activeType = button.dataset.type || 'all';
                    typeFilters.forEach(function (filterButton) {
                        const selected = filterButton === button;
                        filterButton.classList.toggle('active', selected);
                        filterButton.setAttribute('aria-pressed', selected ? 'true' : 'false');
                    });
                    filterArticles();
                });
            });

            searchInput.addEventListener('input', filterArticles);
            filterArticles();
        });
    </script>
</body>

</html>
