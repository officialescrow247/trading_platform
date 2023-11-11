@extends('new_design.app')
@section('content')
    <section>
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between" style="align-items: center;">
                        <div>
                            <span class="rounded-pill me-3 text-light p-1 px-3" style="background-color: #4DAD92;">Part-time to Pro</span> <span style="color: #A6A6A6;">10 MIN READ</span>
                        </div>

                        <div>
                            <button class="btn py-3 rounded-pill px-4 share_btn">Share <i class="fa-solid fa-share-nodes ps-3"></i></button>
                        </div>
                    </div>

                    <h4 class="pt-4" style="font-size: 33px;"><b>Technical analysis: What it is and how to use it in trading</b></h4>
                    <img src="https://images.prismic.io/tnfev2/cb7f6379-c7f8-47ee-93b3-3597a276607e_ARTICLE+TechnicalAnalysis+Device11+BlogImage+2240x1260.png?auto=compress,format" alt="" class="img-fluid my-3">
                    <p>
                        <b>
                            In this guide, we cover technical analysis (TA) and its importance when it comes to planning a trade. Most market participants, even those who favour fundamental analysis, employ some TA, even if this simply involves identifying areas of support and resistance on a price chart. Here we examine TA and why it is such an important tool when it comes to profitable trading. 
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
                                <a href="#what-is-technical-analysis">What is technical analysis?</a>
                                <a href="#understanding-technical-analysis">Understanding technical analysis</a>
                                <a href="#why-is-technical-analysis-important">Why is technical analysis important?</a>
                                <a href="#technical-analysis-tools">Technical analysis tools</a>
                                <a href="#technical-analysis-in-practice">Technical analysis in practice</a>
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
                                Markets can only move in three directions: up, down, or sideways. Your objective as a trader is to discover the right direction at the right moment and speculate accordingly.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                The study of price data or price charts can help in the prediction of future market direction. In theory, markets repeat their history regarding patterns, support, and resistance.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Figuring out a pattern or strategy repeated throughout price history helps you decide whether to buy or sell once you recognise it.
                            </p>
                        </div>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Many traders rely solely on technical analysis without knowing the fundamentals of particular markets. 
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 id="what-is-technical-analysis" class="pt-4" style="font-size: 20px;"><b>What is technical analysis?</b></h3>
                        <p>
                            Technical analysis studies previous price activity to detect patterns and predict future price movements. Technical analysts identify specific patterns that have occurred in the past and use them to generate trade ideas based on the belief that price would respond the same way it did previously. Technical analysis is about probability and possibility rather than prediction. <br><br>

                            Have you ever heard the term “look left, structure provides insight”? <br><br>

                            People can make it too complicated when it comes to technical analysis. In fact, technical analysis in itself is simple maths. You trade only signals or patterns with a higher winning probability without drowning yourself in multiple indicators and distractions. <br><br>

                            We refer to this as confluence. <br><br>

                            It is frequently used to produce short-term/long-term trading signals (depending on the timeframe) from various charting tools. This information assists you in improving your overall trading decisions. <br><br>

                            Charles Dow pioneered technical analysis as we know it today in the late 1800s with his Dow Theory. Nowadays, “the technical” analysis includes hundreds of patterns and signals created through years of research. <br><br>

                            Technical analysis can be manual or automated.  A manual system is one in which you can analyse price history with technical indicators and interpret the data to make a buy or sell decision. Automated trading analysis implies you are "training" a programme to seek certain signals and translate them into buy or sell choices.
                        </p>
                    </div>

                    <div>
                        <h3 id="understanding-technical-analysis" class="pt-4" style="font-size: 20px;"><b>Understanding technical analysis</b></h3>
                        <p>
                            Technical analysis consists of two phases:
                        </p>

                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Finding your edge
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Executing your edge by adding risk and money management
                            </p>
                        </div>

                        <p class="pt-4 pb-3">Your edge in technical analysis has three components:</p>
    
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Recognising a pattern that may predict future market direction
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Finding support and resistance using price charts and timeframes
                            </p>
                        </div>
    
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                Using support and resistance for entries and exits
                            </p>
                        </div>
    
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                With day trading, you may employ both discretionary and automated trading.
                            </p>
                        </div>

                        <p class="pt-4 pb-3">The price normally moves in a zigzag pattern. Hence price action has just two states:</p>
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                When prices zigzag sideways, this is referred to as a range or consolidation.
                            </p>
                        </div>
    
                        <div class="d-flex">
                            <div class="pe-3">
                                <img src="https://tradenation.com/diamond.png" alt="" class="img-fluid">
                            </div>
                            <p>
                                In a trend - prices either zigzag higher (uptrend or bull market) or lower (downtrend or bear market)
                            </p>
                        </div>
                    </div>

                    <div>
                        <p>
                            Technical analysis can be used on any market, but is especially useful in Forex, due to high levels of liquidity in terms of trading volumes and the number of players. Forex markets tend to trend over time, and repeating patterns frequently appear to provide trading opportunities. <br><br>

                            At the same time, technical analysis in Forex markets may be utilised to build and implement short-term trading strategies.
                        </p>
                    </div>

                    <h3 id="why-is-technical-analysis-important" class="pt-4" style="font-size: 20px;"><b>Why is technical analysis important?</b></h3>
                    <p>
                        Technical analysis on a specific market may assist you in identifying when and where to enter a trade and when and where to exit it. In addition, it helps you find trade ideas with a good risk-to-reward ratio in a move. <br><br>

                        A high level of excitement, emotion, and passion characterises the Forex market. As a result, many traders are prone to making trades purely on gut instinct.  <br><br>

                        Technical analysis can help traders to cut out these emotional aspects of trading.  Traders can gain discipline by using tools that are capable of evaluating price strength, momentum, and overall direction when executing their strategy. <br><br>

                        Technical analysis is arguably the most adaptable method of market study. The lessons you gain from evaluating a specific pair of currencies may be applied to other pairs of currencies. Furthermore, the study may be applied outside of the currency market. The technique may be used efficiently on individual equities, stock indices, and other financial markets. In addition, technical analysis works for both short-term and long-term trading strategies. This could be simply identifying whether a market is trending or ranging, along with where the most significant areas of support and resistance lie. 
                    </p>

                    <h3 id="technical-analysis-tools" class="pt-4" style="font-size: 20px;"><b>Technical analysis tools</b></h3>
                    <p>
                        Anyone may study technical analysis and quickly benefit by applying a few straightforward ideas and tools. Check out some of our recommendations listed below.
                    </p>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Chart types</b></h4>
                        <p>
                            Charts are graphical representations of the price movements of assets over time. Such charts frequently include volume information as well. Not only is it easier to discover patterns and trends, but charts' major advantage is the simple presentation of price and volume information across time.
                            <br><br>
                            Charts also assist technical analysts in determining entry and exit locations, as well as where to apply stops to mitigate risk. Because charts are so widely used, technical analysts are sometimes referred to as chartists. Originally, charts were produced by hand, but today, most charts are created by computer.
                            <br><br>
                            Line charts, bar charts, candlestick charts, Renko charts, point-and-figure charts, and other chart forms are commonly employed by traders, and all are available on our trading platform. Charts can be displayed on either an arithmetic or logarithmic scale. The types of charts and scales used are determined by what information the technical analyst believes is most significant and which charts and scales best display that information.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Price action trading</b></h4>
                        <p>
                            Price action is a trading approach that allows a trader to read the market and make subjective trading decisions based on previous and real price changes. Traders taking this approach concentrate on price action alone to determine when and where to buy and sell. In this respect, it is a no-frills, trading-with-your-gut approach which ignores fundamental and most technical analysis, concentrating solely on recent and historical price movements.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Trendlines (Variable levels of support and resistance)</b></h4>
                        <p>
                            Trendlines are lines placed on a price chart to highlight that the price is moving in a specific direction, just beneath or above the asset's local pivot highs or lows. These lines emerge as a result of market players' natural placing of buy or sell orders, as well as the increasing or lowering of stop loss levels, or where natural profit-taking may occur. <br><br>

                            A trend line must normally have many hits to be deemed genuine, and traders are advised to wait for a break and closure above or below trend lines before taking any action. On the other hand, trendlines can be utilised to assist a trader in making a decision even before the trendline has been violated and is no longer relevant.<br><br>

                            Trendlines also provide useful indications of where a trader may choose to open or close a position to maximise profit and avoid risk.
                        </p>
                    </div> 
                    
                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Support and resistance (Simple horizontal lines)</b></h4>
                        <p>
                            Horizontal resistance and support lines develop over time as markets repeatedly bounce off, or fall from, specific price levels. These may be significant round numbers, or levels highlighted by Fibonacci Retracement and other drawing tools. Support is a price level seen on a chart from which the price has often rebounded in the past and might produce yet another bounce if the price reaches it again, and buyers move in. <br><br>

                            Resistance is a price level on a chart which the market has previously found to be a ceiling.  This becomes an area of interest for sellers to come in, either to commence profit-taking, or to initiate short positions. 
                        </p>
                    </div> 

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Chart patterns</b></h4>
                        <p>
                            Certain Chart patterns can frequently tip traders off about the eventual price movement of a financial asset. This can help traders plan their entry level for a trade, where to take profits if the trade goes their way, and where to put a loss-limiting stop order if things don’t work out as planned.  Technical analysis may generate triangles and other significant patterns on price charts using trend lines. If you recognise one of those patterns, it can often be the case that the price of the asset will break in one way rather than another, providing you with a market edge. <br><br>

                            Ascending triangles, falling wedges, inverse head & shoulders, and other bullish price patterns are common. Descending triangles, rising wedges, double tops, and head and shoulders patterns are all bearish price patterns.
                        </p>
                    </div> 

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Candlestick patterns</b></h4>
                        <p>
                            Japanese candlesticks were created to help technical analysts and traders to record, simply and in visual form, a host of information about how prices have behaved over a set period of time.  The shape, length, colour, and other characteristics of a candle can tell a trader a lot about how a market is trading. A set of candlesticks can build into a pattern which can then signal the probability of a market trading in a particular direction over time.  Many candles, and also sets of candles, have specific names. <br><br>

                            A Doji, for example, is a sort of candlestick pattern that generally indicates market hesitation and the possibility of a trend change.<br><br>

                            Candlesticks aren't always beneficial on their own. However, combining candlestick analysis with chart patterns, moving averages, trading volume, and other factors can significantly impact a trader's success rates.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Harmonic patterns</b></h4>
                        <p>
                            Harmonic patterns are more precise than typical chart patterns, and this can make them difficult to spot. Historic price movements create geometric patterns which must conform to certain parameters, such as prices reversing direction at points predicted by Fibonacci ratios. Adherents claim that trading on such patterns help to reduce the subjective nature of trading. <br><br>

                            To trade effectively using harmonic patterns requires an understanding and knowledge of  Fibonacci retracements and extensions. Harmonic trading uses patterns and arithmetic to create a precise trading system based on the concept that patterns repeat themselves. <br><br>

                            The key Fibonacci ratio can be found in many natural and environmental structures, and is even observable within our own bodies. Followers of harmonic pattern trading see the pattern repeating itself across nature and culture. The ratio may also be seen in financial markets, which are influenced by the surroundings and societies in which they operate.<br><br>

                            The main Fibonacci ratio is at the heart of harmonic patterns, and is derived from the Fibonacci Sequence. This is a series of numbers, where the next number in the sequence is the sum of the two before it: 0,1,1,2,3,5,8,13,21,34,55,89,144,233 etc. The Fibonacci Ratio is found by dividing adjacent numbers into each other.  So, 89 divided by 144 gives you 0.618, while 233 divided by 144  gives you  1.618. By turn we get other ratios which are complementary: 0.382, 0.50, 1.41, 2.0, 2.24, 2.618, 3.14, and 3.618, and these are the basis of both Fibonacci and harmonic patterns.<br><br> 

                            The trader can use Fibonacci ratios to anticipate future moves after identifying patterns of varying durations and magnitudes. Scott Carney is mainly credited with developing the trading strategy, although others have contributed or discovered patterns and levels that improve performance.<br><br>

                            Harmonic price patterns are unique in such a way that they require the pattern to display movements of a specific size for the pattern's unfolding to produce an appropriate reversal point. A trader may notice a harmonic pattern, but if the Fibonacci levels do not coincide, the pattern is considered untrustworthy. This might be advantageous because it necessitates the trader's patience in waiting for good setups.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Elliott Wave theory</b></h4>
                        <p>
                            The Elliott Wave hypothesis is a theory in technical analysis that describes price fluctuations in the financial markets. After observing and identifying repeating fractal wave patterns, Ralph Nelson Elliott created the hypothesis. Stock price fluctuations and consumer behaviour both exhibit waves. 

                            Riders on a wave are investors who try to profit from a market movement. A refinancing wave is a powerful trend among homeowners to refinance their existing mortgages with new ones with better conditions.

                            Some technical analysts attempt to benefit from market wave patterns using Elliott Wave Theory. According to this idea, price changes may be forecast because they move in recurring up-and-down patterns known as waves, which are caused by investor psychology or mood.

                            Simply said, movement in the direction of the trend occurs in 5 waves (referred to as the motive wave), whereas any correction against the trend occurs in three waves (called the corrective wave). 

                            The trend movement is denoted by the numbers 1, 2, 3, 4, and 5. In contrast, the three-wave correction is denoted by the letters a, b, and c. These patterns may be found in both long-term and short-term charts.

                            There are many types of waves, or price patterns, under the Elliott Wave theory that investors may learn from. Impulse waves, for example, might have an upward or downward trend with five sub-waves that span hours, days, or even decades. 

                            They have three rules: the second wave cannot retrace more than 100% of the first wave; the third wave cannot be shorter than the first and fifth waves; and wave four cannot ever exceed the third wave. Along with impulse waves, there are corrective waves, which occur in three-wave patterns.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Technical indicators</b></h4>
                        <p>
                            Technical indicators are mathematical patterns formed from previous data that technical traders use to forecast future price trends and make trading choices. Using a mathematical formula, it derives a sequence of data points using prior price, volume, and open interest data. <br><br>

                            A technical indicator is often shown visually as either an overlay, or underneath,  the related price chart for analysis. The mechanics of a technical indicator capture the behaviour and, occasionally, investor psychology to hint at future price activity tendencies. <br><br>

                            Cycle volumes, momentum readings, volume patterns, price trends, Bollinger Bands, moving averages, oscillators, and mood indicators are technical indicators used in technical analysis to forecast future price movements. These can be easily added to the charts in our trading platform. In addition to offering useful insight into the price structure, a technical indicator can help traders to profit from price swings. <br><br>

                            Some technical indicators provide indications independently, while others work in tandem. They are used in technical analysis to assess a security's strength or weakness by focusing on trading signals, patterns, price movements, and other analytical charting tools. Although there are non-specific market technical indicators, some technical indicators are intended to be utilised for a specific financial market.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="technical-analysis-in-practice" style="font-size: 17px;"><b>Technical analysis in practice</b></h4>
                        <p>
                            Day traders continuously rely on their ability to make rapid and accurate selections. You don't have time to waste when you notice that great entry on a stock you've been eyeing for days. Every second matters and each action must be exact. 

                            So, how does a trader make an informed judgement regarding whether to buy or sell a stock in such a short time? Isn't it hard to investigate a firm in that amount of time? 

                            Let us answer these questions.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Understanding a trend</b></h4>
                        <p>
                            A market’s trend is the overall direction in which the price of an asset is moving. The trend might be up, down, or flat. Understanding if an asset is trending or not is vital to avoid being on the wrong side of a trade. For example, if an asset is in a downtrend, opening a long position would be risky until there is obvious evidence of a trend reversal. <br><br>

                            When searching for trends, it is critical to consider temporal periods. A stock might exhibit distinct trends over different time frames, and you should focus on the most important patterns in your trading strategy. For example, a stock may be on a year-long upswing, presenting a good investment opportunity. But that same stock may be in a multi-day downturn, suggesting that it could be better to wait before buying, or even selling the stock (going short) and hopefully buying it back later at a cheaper price.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Broader market trends</b></h4>
                        <p>
                            Individual equities might be influenced by broader market sentiment. Similarly to how technical analysis may summarise price variables, bigger markets can summarise the activities of many individual equities. The S&P 500, DOW, and NASDAQ are examples of larger markets. If the NASDAQ is down 3% on the day, you may be more cautious to predict a tech stock's breakthrough.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Anticipations Vs Confirmation</b></h4>
                        <p>
                            There are two fundamental methods of trade planning. You can either anticipate a move or wait for confirmation. Both systems have advantages and disadvantages. Anticipation can result in better entrances with less assurance, but waiting for confirmation results in stronger certainty at the cost of a later entry.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Role of timeframes</b></h4>
                        <p>
                            It is critical to be aware of your trading environment. Day traders, swing traders, investors, institutions, scalpers, and others all contribute to market trading activity. These various groups rely on various analytical tools. This is why it is critical to look at the larger picture. You may accomplish this by studying charts over several periods. <br><br>

                            Take note of intraday charts, hourly charts, daily charts, and so forth. This might help you spot critical price points and better grasp other traders' mindsets. Analyse many charts and attempt to comprehend the viewpoints of various sorts of traders.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Limitations of technical indicators</b></h4>
                        <p>
                            Although technical indicators might help with decision-making, using too many of them can be wasteful and unnecessary. Remember that most technical indicators use the same three inputs: volume, price, and time. <br><br>

                            Traders must be able to tell the difference between indications that aid and impede decision-making. Furthermore, indications should be utilised to better your plan, not to justify previous actions.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Balanced risk to reward</b></h4>
                        <p>
                            As traders we aim to stack the odds in our favour in the form of confluence. Speculating on the financial markets has its own advantages and disadvantages. One of the major discussion points within the trading community is the “risk to reward” ratio. <br><br>

                            The consensus is that for every dollar risked, two Dollars should be the minimum outcome achievable on any given trade. This forms part of risk management. <br><br>

                            The positive aspect of a good risk to reward ratio, in this case, a 1:2 (risk/reward), indicates that even if 50% of your trades are not profitable, you can still be profitable overall.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="" style="font-size: 17px;"><b>Role of fundamentals</b></h4>
                        <p>
                            This entire article is focused on technical analysis, but fundamental analysis is still useful. Fundamental analysis cannot be applied to every transaction, but it is vital to be aware of some fundamentals. <br><br>

                            Understanding fundamentals can assist you in determining the authenticity of specific price movements. This helps you to develop a well-rounded trading strategy. Assume you observe a stock that has broken out 50% on the day. Before selecting whether to make a short or long play, you should consider the validity of the move. <br><br>

                            If the share price is breaking out because the company's earnings expectations have doubled, you may reconsider your short position. If, on the other hand, the stock is artificially breaking out owing to a sponsored promotion, you may adopt a different strategy.<br><br>

                            Even if your strategy is largely technical, it might be useful to establish any fundamental triggers for the price movement.
                        </p>
                    </div>

                    <div class="pt-4">
                        <h4 id="final-thoughts" style="font-size: 17px;"><b>Final thoughts</b></h4>
                        <p>
                            Many investors use both fundamental and technical research when making investment decisions because technical analysis helps cover knowledge gaps. Technical analysis may help traders and investors increase their long-term risk-adjusted returns, but it's critical to learn and apply these strategies before investing real money to prevent expensive mistakes. <br><br>

                            Learning, applying, and refining technical analysis takes years. It is difficult to predict the market with 100% precision, but skilled technical traders may remain continuously profitable through a mix of research and risk management. Small changes to your strategy may have a big impact, and there's always something new to learn!
                        </p>
                    </div>


                    <h5 id="people-also-ask" class="pt-3" style="font-size: 17px;"><b>People also ask</b></h5>
                    <hr>
                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                        <b>How does technical analysis work?</b>
                    </button>
                    
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body article_collapse">
                            Based on previous data, such as price and transaction volume, technical analysis helps investors to predict the price direction of stocks, futures, bonds, fixed-income products, commodities, or currency pairings. Traders can utilise projections to better grasp market sentiment and decide where to invest for profit. This technique is commonly used in behavioural finance and quantitative research.
                        </div>
                    </div>
                    <hr>
                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>What is Forex technical analysis?</b>
                    </button>
                    
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                            Forex technical analysis, like stock analysis, allows investors to estimate asset price direction based on historical data. These are useful for formulating and implementing short-term trading strategies.
                        </div>
                    </div>
                    <hr>
                    <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <b>Is it better to swing trade or day trade?</b>
                    </button>
                    
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body article_collapse">
                            Technical analysis can be approached in two ways: <br><br>

                            Top-down - Traders use this strategy to choose an appropriate investment by monitoring trade patterns ranging from major indexes to sector-specific and regular interval charts. <br><br>

                            Bottom-up - Analysts employ this method to identify entry and exit points for potential investments by focusing on discounted shares while ignoring the overall market trend.
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@endsection