@extends('new_design.app')
@section('content')
    <section>
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between" style="align-items: center;">
                        <div>
                            <span class="rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span> <span style="color: #A6A6A6;">8 MIN READ</span>
                        </div>

                        <div>
                            <button class="btn py-3 rounded-pill px-4 share_btn">Share <i class="fa-solid fa-share-nodes ps-3"></i></button>
                        </div>
                    </div>

                    <h4 class="pt-4" style="font-size: 33px;"><b>Fundamental analysis: What it is and how to use it in trading</b></h4>
                    
                    <p>
                        <b>
                            The skill of fundamental analysis (FA) is complex and necessary for determining the actual value of any financial asset. FA is a process of analysing economic events, among others, that shape the markets to anticipate price movements.
                        </b>
                    </p>

                    <hr>
                        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            
                            <svg style="width: 20px;" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="FormatAlignLeftIcon"><path d="M15 15H3v2h12v-2zm0-8H3v2h12V7zM3 13h18v-2H3v2zm0 8h18v-2H3v2zM3 3v2h18V3H3z"></path></svg>
                            <span class="ps-3">In this article</span>
                        </button>
                        
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body article_collapse">
                                <a href="#key-takeaways">Key takeaways</a>
                                <a href="#understanding-fundamental-analysis-how-does-it-work">Understanding fundamental analysis: how does it work?</a>
                                <a href="#what-is-fundamental-analysis">What is fundamental analysis</a>
                                <a href="#how-fundamental-analysis-is-executed">How fundamental analysis is executed</a>
                                <a href="#factors-that-affect-forexs-fundamental-analysis">Factors that affect Forex's fundamental analysis</a>
                                <a href="#factors-that-affect-stock-fundamental-analysis">Factors that affect stock fundamental analysis</a>

                                <a href="#why-is-fundamental-analysis-important">Why is fundamental analysis important?</a>
                                <a href="#pros-and-cons-of-fundamental-analysis">Pros and cons of fundamental analysis</a>
                                <a href="#fundamental-analysis-vs-technical-analysis">Fundamental analysis vs. technical analysis</a>

                                <a href="#final-thoughts">Final thoughts</a>
                                <a href="#people-also-ask">People also ask</a>
                            </div>
                        </div>

                    <hr>

                    <div>
                        <h3 id="key-takeaways" class="pt-4" style="font-size: 20px;"><b>Key takeaways</b></h3>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Fundamental analysis is a technique for assessing an asset's true or "fair market" value.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Fundamental analysts look for assets that are now trading at greater or lower than their true worth.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                If the fair market value exceeds the market price, the asset is considered cheap, and a long/buy bias recommendation is favoured.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                If the fair market value is less than the market price, the asset is considered overpriced, and the short/sell bias is favoured.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 id="what-is-technical-analysis" class="pt-4" style="font-size: 20px;"><b>Understanding fundamental analysis: how does it work?</b></h3>
                        <p>
                            Fundamental analysis determines the fundamental value of an asset by studying associated economic and financial elements. <br><br>

                            Fundamental analysts research everything that has the potential to impact the value of a security, from macroeconomic issues like the state of the economy and industry circumstances to microeconomic elements like the efficacy of the company's management. <br><br>

                            The main goal is to determine a figure that you may compare to the current price of an asset to assess if it is undervalued or overpriced.
                        </p>
                    </div>

                    <div>
                        <h3 id="what-is-fundamental-analysis" class="pt-4" style="font-size: 20px;"><b>What is fundamental analysis</b></h3>
                        <p>
                            Fundamental analysis is often performed from a macro to micro viewpoint to uncover financial assets that are not valued appropriately by the market. <br><br>

                            Fundamental analysts often research in the following order:
                        </p>
                    </div>

                    <div class="d-flex">
                        <div class="pe-3">
                            <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                        </div>
                        <p>
                            The general condition of the economy
                        </p>
                    </div>

                    <div class="d-flex">
                        <div class="pe-3">
                            <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                        </div>
                        <p>
                            The specific industry's strength
                        </p>
                    </div>

                    <div class="d-flex">
                        <div class="pe-3">
                            <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                        </div>
                        <p>
                            The corporation issuing the security's financial performance
                        </p>
                    </div>

                    <p class="pt-3">
                        Once you have evaluated an asset's intrinsic worth and considered other critical indications, such as market sentiment, you can utilise that information to guide your trade decisions. When you determine that a stock is under or over-valued based on its fundamentals, it may be time to buy/long or short/sell. 
                    </p>

                    <div>
                        <h3 id="how-fundamental-analysis-is-executed" class="pt-4" style="font-size: 17px;"><b>How fundamental analysis is executed</b></h3>
                        <p>
                            Fundamental analysis evaluates the value of security using publicly available financial data. The information is documented on financial statements such as quarterly and annual reports, as well as filings. <br><br>

                            For example, you might do a fundamental analysis of the value of a bond by considering economic aspects such as interest rates and the overall status of the economy. The bond market would then be evaluated, and financial data from similar bond issuers would be used. <br><br>

                            Finally, you would examine the issuing company's financial statistics, taking into account external considerations such as future changes in its credit rating. <br><br>

                            Fundamental analysis determines a security's fundamental worth and potential for future growth by analysing its revenues, profits, return on equity, profit margins, and other statistics.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h3 id="" style="font-size: 17px;"><b>Intrinsic value</b></h3>
                        <p>
                            Intrinsic value has a distinct meaning in stock valuation that is different in options trading. Intrinsic value is the worth of an asset based on the financial state of the issuing firm and current market and economic conditions. <br><br>

                            Compared to publicly accessible financial data, one of the basic assumptions underlying fundamental analysis is that a stock's present price frequently does not completely reflect the company's value. Another assumption is that the value represented in the company's basic data is more likely to be closer to the stock's genuine worth.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h3 id="" style="font-size: 17px;"><b>Bottom-up fundamental analysis</b></h3>
                        <p>
                            The most prevalent strategy in the basic fundamental analysis is a 'bottom-up' approach. Whereas the top-down approach considers the overall economy and industry before analysing a single firm, the bottom-up approach concentrates solely on the stock and its fundamentals. This covers cash flows, prospective growth, balance sheets, and financial ratios. <br><br>

                            As a result, traders who conduct bottom-up fundamental research tend to presume that a firm can perform well in a bad market.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h3 id="" style="font-size: 17px;"><b>Fundamental analysis: quantitative and qualitative</b></h3>
                        <p>
                            The challenge with defining the term fundamentals is that it may refer to anything linked to a security's economic well-being. <br><br>

                            The numerous fundamental components might be classified as quantitative or qualitative:
                        </p>
                    </div>

                    <div class="d-flex">
                        <div class="pe-3">
                            <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                        </div>
                        <p>
                            <b>Quantitative:</b> data that can be represented using numbers, figures, ratios, or algorithms. 
                        </p>
                    </div>

                    <div class="d-flex">
                        <div class="pe-3">
                            <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                        </div>
                        <p>
                            <b>Qualitative:</b> is the quality, standard, or nature of something rather than its quantity.
                        </p>
                    </div>
                    <p>
                        Quantitative fundamentals are concrete numbers in this context. They are the observable qualities of a company. As a result, financial statements are the most important source of quantitative data. Revenue, profit, assets, and other metrics may all be adequately assessed. <br><br>

                        The qualitative fundamentals are more difficult to quantify. They might include a company's senior leaders' quality, brand awareness, patents, and unique technologies. Neither qualitative nor quantitative analysis is superior in and of itself. 
                    </p>
                    
                    <div class="pt-4">
                        <h4 id="factors-that-affect-forexs-fundamental-analysis" style="font-size: 17px;"><b>Factors that affect Forex's fundamental analysis</b></h4>
                        <p>
                            Changes in economic statistics may indicate changes in a country's economic status, which may impact the value of an economy's currency. as well as your forex fundamental analysis
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Rates of Interest</b></h4>
                        <p>
                            Interest rates are a key indicator in Forex's fundamental research. There are other interest rates, but we will concentrate on the nominal or base interest rates established by an economy's central bank here. Central banks print money, which private banks then borrow. <br><br>

                            A base or nominal interest rate is the percentage of principle that private banks pay central banks for borrowing currencies. People frequently allude to this notion when they use the phrase "interest rates."
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Inflation</b></h4>
                        <p>
                            Too much inflation shifts the supply-demand balance in favour of supply, causing the currency to devalue since there is just more of it than is wanted. Deflation is the polar opposite of inflation. During deflation, the value of money rises as goods and services fall in price.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>GDP</b></h4>
                        <p>
                            Gross Domestic Product (GDP) assesses all commodities and services generated within an economy over a particular period. It is regarded as the greatest indicator of an economy's overall health.<br><br>

                            On the other hand, the link between economic development, or lack thereof, and currency value is not that simple. Consistently strong economic development can increase inflation, which, as we have seen, hurts currency value.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Consumer Price Index (CPI)</b></h4>
                        <p>
                            The Consumer Price Index (CPI) is directly related to the country's pricing for goods and services. Suppose the CPI index is excessively high (above the central bank's CPI benchmark). In that case, the central bank will raise interest rates in an effort to reduce inflation and stabilise the country's economic growth rate.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Retail Sales</b></h4>
                        <p>
                            The retail sales figures of a country provide an accurate picture of how people spend (people's income level) and the health of its economy at the most basic level. A strong retail sales statistic indicates that a country's domestic economy is in good health; it hints at future favourable growth rates.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Politics</b></h4>
                        <p>
                            Political change within a country might have ramifications for financial markets. A new president, for example, may make corporate life or new infrastructure more difficult. <br><br>

                            Geopolitics may also be significant. For example, increased violence in the Middle East can strain the world's oil supply, driving up prices. 
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Natural catastrophes and seasonality</b></h4>
                        <p>
                            These two variables appear unconnected to markets, yet they frequently generate volatility across various assets. Natural catastrophes may cause problems for companies and economies and disrupt commodity supply systems. Seasonal weather patterns might have the same effect.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Factors that affect stock fundamental analysis</b></h4>
                        <p>
                            Fundamental stock analysis is the examination of the basic company characteristics as well as the firm's financials. It thoroughly examines several essential ratios and compares the organisation on a peer and industry level.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Stock market supply and demand</b></h4>
                        <p>
                            Many factors influence the market. But when you peel away everything on the exterior and look at the most fundamental aspect, it is simple: supply and demand. An imbalance between supply and demand, like any other commodity, will cause the price of a stock to rise or fall. If there is a sudden scarcity of potatoes and many people line up to buy them, the price of potatoes will rise. <br><br>

                            Similarly, if a firm is performing well and everyone wants to acquire shares of the same company, there will be a scarcity of shares, causing the company's stock price to skyrocket. The converse occurs if too many shares are available, but no one wants to acquire them. In that event, the stock price will drop.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Stock market company-related factors</b></h4>
                        <p>
                            It goes without saying that if a firm has publicly traded shares, anything that happens within the company will directly impact the share price. So, with successful product launches, greater revenue, decreased debt, and an increasing investors’ capital, the company's stock price is likely to grow.
                                    <br><br>
                            However, if the firm is losing money, having product failures, or amassing debt, most shareholders will desire to sell their shares, lowering the stock price. Changes in management and mergers and acquisitions are two more reasons that might cause stock values to rise and fall.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Stock market investor sentiment</b></h4>
                        <p>
                            Investor sentiment can also have an impact on stock market values. The way investors invest money has an impact on how the stock market functions. Stock prices will rise if investors take more risks and invest more aggressively. On the other hand, stock prices will fall if investors become more cautious, preferring safety over risk.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Interest rates have an impact on the stock market</b></h4>
                        <p>
                            As an example, the actions of the Reserve Bank of India (RBI) have a direct impact on stock prices. The RBI sets interest rates in India, changing them regularly to keep the Indian economy stable. Naturally, a higher interest rate means businesses must pay more for loans, resulting in lower profitability. <br><br>

                            Stock prices will fall as a result of this. On the other hand, reduced interest rates indicate that the corporation can now borrow money from banks at much lower prices, saving money and increasing profits. In this instance, the stock price will rise.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Political factors influencing the stock market</b></h4>
                        <p>
                            The nation's political situation is one of the most important variables influencing the stock market. If the political atmosphere is bleak, with the government seeming weak, the prospect of conflict, or negative public attitude against the existing administration, the stock price will fall. <br><br>

                            Similarly, the stock price will rise if the government seems powerful and has widespread popular backing. Furthermore, if the government has solid developing plans, investors will be more eager to invest, but a government with a poor developmental plan may cause stock values to fall.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Current events affecting the stock market</b></h4>
                        <p>
                            The stock market is also influenced by news and other current events. Current stock market events include political unrest, civil conflict, rioting, and terrorist attacks. These occurrences can cause stock values to plummet and impact market volatility.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Natural disasters have an impact on the stock market</b></h4>
                        <p>
                            Natural disasters such as earthquakes and floods significantly impact stock market prices. This occurs for various reasons, including destroying property and other assets. This causes corporations to experience significant losses, resulting in a drop in stock values. A breakdown in manufacturing and transportation of goods is affecting company sales. As a result, stock values will likely decline when natural calamities strike.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Why is fundamental analysis important?</b></h4>
                        <p>
                            Fundamental analysis is essential for evaluating the company's stock's relative position to its fair value. As previously said, it entails analysing and assessing the company's key ratios against its prior performance and against its peers and the industry average. It is the honest appraisal of the company's financials that determines future growth potential and the relative stability of its stocks in the markets.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="pros-and-cons-of-fundamental-analysis" style="font-size: 17px;"><b>Pros and cons of fundamental analysis</b></h4>
                        <p>
                            There are various advantages to doing an analysis based on a company's financial and competitive status. It is also beneficial to analyse the environment in which it functions. Concentrating solely on the business rather than the stock price gives traders a notion of what the firm is truly worth. This is useful for long-term trading. <br><br>

                            Trading during market bubbles may be profitable, but it's still critical to understand when the market is in a bubble.<br><br>

                            The premium to fair value at which equities are trading can be used to control portfolio risk. Asset allocation considerations can then be made to minimise a portfolio's potential downside. Traders who are accurate while the rest of the market is incorrect frequently make the most money. This can only be accomplished through basic examination. <br><br>

                            Furthermore, judgments based on basic analysis can be more accurate, especially in the long run.<br><br>

                            Fundamental analysis has various disadvantages. It's critical, to be honest about its limits. Fundamental analysis takes time since each firm’s financials must be studied individually and thoroughly. The majority of the data utilised in the basic analysis is freely available. <br><br>

                            Fundamental analysis reveals relatively little about what may occur in the short run. Financial statements cannot predict short-term market changes or volatility. Fundamental analysis is far less exact than is commonly assumed. <br><br>

                            Valuation methodologies, such as the discounted cash flow model, are predicated on a slew of rarely true assumptions. Target values are useful in a relative sense, but they are restricted in valuing a firm more than one or two years in the future.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="fundamental-analysis-vs-technical-analysis" style="font-size: 17px;"><b>Fundamental analysis vs. technical analysis</b></h4>
                        <p>
                            Experienced traders only make a decision based on conjecture or by researching the stock in question. Before trading stocks, you should carry out extensive technical research, fundamental analysis, or both. Many new traders in this industry are sometimes perplexed by the two titles. <br><br>

                            New traders frequently use the terms fundamental analysis and technical analysis interchangeably. Fundamental and technical analysis are two primary schools of thought in the financial market. Both of these strategies can complement one another. <br><br>

                            There are several disagreements on which of these strategies is ideal for stock analysis. Although the primary goal is to anticipate future price movements, they differ in how they are used and the instruments they utilise to get findings.<br><br>

                            Fundamental analysis studies the elements that will soon influence the company's stock price. They examine the financial statements, managerial progress, industry, and cash flow in relation to the economy. By doing so, we learn about the company's intrinsic worth, which may be utilised to determine if the stock price is low or overvalued.<br><br>

                            On the other hand, technical analysis is based on market data such as charts, patterns, trade volume, and price movement tendencies. Market trends and patterns tend to repeat themselves frequently, and technical analysis assists them in identifying these trends in the market. The data is also utilised to forecast future price fluctuations.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="final-thoughts" style="font-size: 17px;"><b>Final thoughts</b></h4>
                        <p>
                            Fundamental analysis is a stock valuation method used by analysts to assess if a stock is overvalued or undervalued by the market. It considers a company's economic, market, industry, and sector factors and financial performance. <br><br>

                            Financial ratios derived from financial reports, government industry and economic studies, and other sources are used to evaluate a firm. Because not every analyst uses the same methods or analyses equities in the same way, you may find that a stock is priced differently than another analyst. What matters is that the stock you study fits your value criteria and that your analysis produces actionable information for you. <br><br>

                            There are several economic indicators, as well as numerous private reports, that may be utilised to assess forex fundamentals. It is critical to spend time looking at figures and understanding what they imply and how they affect a country's economy. These indicators may be a tremendous asset to any forex trader when applied correctly.
                        </p>
                    </div>


                    <h5 id="people-also-ask" class="pt-3" style="font-size: 17px;"><b>People also ask</b></h5>
                    <hr>
                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                        <b>What is the distinction between fundamental and technical analysis?</b>
                    </button>
                    
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body article_collapse">
                            The primary distinction between fundamental and technical analysis is that the former considers all factors that will impact the company's stock price. In contrast, the latter is based on market data such as charts, patterns, trading volume, and price movement trends.
                        </div>
                    </div>
                    <hr>
                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>What do fundamental and technical analyses mean?</b>
                    </button>
                    
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                            Fundamental analysis seeks to determine the intrinsic value of a company's stock, which can then be used to forecast the asset's future worth. On the other hand, technical analysis entails forecasting the share price based on the asset price, volume and investor sentiment.
                        </div>
                    </div>
                    <hr>
                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>Which is superior, fundamental or technical analysis?</b>
                    </button>
                    
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                            Even though both of these tactics are widely employed, they serve distinct purposes for different people. Neither of these can be superior to the other. Fundamental analysis is typically utilised by investors who want to invest their money for a long time. In contrast, technical analysis is used by traders who want to make rapid judgments on their short-term investments.
                        </div>
                    </div>
                    <hr>

                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>Is fundamental analysis applicable to short-term trading analysis?</b>
                    </button>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                            Fundamental analysis is often used to analyse a firm and its stock movement over a lengthy period.
                        </div>
                    </div>

                    <hr>

                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>What are the two fundamental forms of stock analysis?</b>
                    </button>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                            A stock's fundamental and technical examination are the two primary forms of analysis.
                        </div>
                    </div>

                    <hr>

                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>Is it enough to do a fundamental quantitative study?</b>
                    </button>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                        No. Both quantitative and qualitative components of basic analysis are crucial, yet they are mutually incompatible.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection