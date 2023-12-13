from icrawler.builtin import GoogleImageCrawler
google_crawler = GoogleImageCrawler(
    feeder_threads=1,
    parser_threads=2,
    downloader_threads=4,
    storage={'root_dir': 'do_hieu/hoodie_nu'})
filters = dict(
    size='large')
google_crawler.crawl (keyword='áo hoodie bé gái', filters=filters, max_num=1)