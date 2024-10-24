import coincatchRest from '../coincatch.js';
import type { Balances, Dict, Int, Market, OHLCV, Order, OrderBook, Position, Str, Strings, Ticker, Tickers, Trade } from '../base/types.js';
import Client from '../base/ws/Client.js';
export default class coincatch extends coincatchRest {
    describe(): any;
    getMarketFromArg(entry: any): import("../base/types.js").MarketInterface;
    authenticate(params?: {}): Promise<any>;
    watchPublic(messageHash: any, subscribeHash: any, args: any, params?: {}): Promise<any>;
    unWatchPublic(messageHash: any, args: any, params?: {}): Promise<any>;
    watchPrivate(messageHash: any, subscribeHash: any, args: any, params?: {}): Promise<any>;
    watchPrivateMultiple(messageHashes: any, subscribeHashes: any, args: any, params?: {}): Promise<any>;
    handleAuthenticate(client: Client, message: any): void;
    watchPublicMultiple(messageHashes: any, subscribeHashes: any, argsArray: any, params?: {}): Promise<any>;
    unWatchChannel(symbol: string, channel: string, messageHashTopic: string, params?: {}): Promise<any>;
    getPublicInstTypeAndId(market: Market): any[];
    handleDMCBLMarketByMessageHashes(market: Market, hash: string, client: Client, timeframe?: Str): import("../base/types.js").MarketInterface;
    watchTicker(symbol: string, params?: {}): Promise<Ticker>;
    unWatchTicker(symbol: string, params?: {}): Promise<any>;
    watchTickers(symbols?: Strings, params?: {}): Promise<Tickers>;
    handleTicker(client: Client, message: any): void;
    parseWsTicker(ticker: any, market?: any): Ticker;
    watchOHLCV(symbol: string, timeframe?: string, since?: Int, limit?: Int, params?: {}): Promise<OHLCV[]>;
    unWatchOHLCV(symbol: string, timeframe?: string, params?: {}): Promise<any>;
    handleOHLCV(client: Client, message: any): void;
    parseWsOHLCV(ohlcv: any, market?: Market): OHLCV;
    watchOrderBook(symbol: string, limit?: Int, params?: {}): Promise<OrderBook>;
    unWatchOrderBook(symbol: string, params?: {}): Promise<any>;
    watchOrderBookForSymbols(symbols: string[], limit?: Int, params?: {}): Promise<OrderBook>;
    handleOrderBook(client: Client, message: any): void;
    handleCheckSumError(client: Client, symbol: string, messageHash: string): Promise<void>;
    handleDelta(bookside: any, delta: any): void;
    handleDeltas(bookside: any, deltas: any): void;
    watchTrades(symbol: string, since?: Int, limit?: Int, params?: {}): Promise<Trade[]>;
    watchTradesForSymbols(symbols: string[], since?: Int, limit?: Int, params?: {}): Promise<Trade[]>;
    unWatchTrades(symbol: string, params?: {}): Promise<any>;
    handleTrades(client: Client, message: any): void;
    parseWsTrade(trade: any, market?: any): Trade;
    watchBalance(params?: {}): Promise<Balances>;
    handleBalance(client: Client, message: any): void;
    watchOrders(symbol?: Str, since?: Int, limit?: Int, params?: {}): Promise<Order[]>;
    handleOrder(client: Client, message: any): void;
    parseWsOrder(order: Dict, market?: Market): Order;
    watchPositions(symbols?: Strings, since?: Int, limit?: Int, params?: {}): Promise<Position[]>;
    getPrivateInstType(market: Market): "umcbl" | "dmcbl";
    handlePositions(client: Client, message: any): void;
    parseWsPosition(position: any, market?: any): Position;
    handleErrorMessage(client: Client, message: any): boolean;
    handleMessage(client: Client, message: any): void;
    ping(client: Client): string;
    handlePong(client: Client, message: any): any;
    handleSubscriptionStatus(client: Client, message: any): any;
    handleUnSubscriptionStatus(client: Client, message: any): any;
    handleOrderBookUnSubscription(client: Client, message: any): void;
    handleTradesUnSubscription(client: Client, message: any): void;
    handleTickerUnSubscription(client: Client, message: any): void;
    handleOHLCVUnSubscription(client: Client, message: any): void;
}
