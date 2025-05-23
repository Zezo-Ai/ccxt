<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class coinlist extends \ccxt\async\Exchange {
    public function public_get_v1_symbols($params = array()) {
        return $this->request('v1/symbols', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_summary($params = array()) {
        return $this->request('v1/symbols/summary', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol($params = array()) {
        return $this->request('v1/symbols/{symbol}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_summary($params = array()) {
        return $this->request('v1/symbols/{symbol}/summary', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_book($params = array()) {
        return $this->request('v1/symbols/{symbol}/book', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_quote($params = array()) {
        return $this->request('v1/symbols/{symbol}/quote', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_candles($params = array()) {
        return $this->request('v1/symbols/{symbol}/candles', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_auctions($params = array()) {
        return $this->request('v1/symbols/{symbol}/auctions', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_auctions_auction_code($params = array()) {
        return $this->request('v1/symbols/{symbol}/auctions/{auction_code}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_time($params = array()) {
        return $this->request('v1/time', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_assets($params = array()) {
        return $this->request('v1/assets', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_leaderboard($params = array()) {
        return $this->request('v1/leaderboard', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_affiliate_competition_code($params = array()) {
        return $this->request('v1/affiliate/{competition_code}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_competition_competition_id($params = array()) {
        return $this->request('v1/competition/{competition_id}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_v1_symbols_symbol_funding($params = array()) {
        return $this->request('v1/symbols/{symbol}/funding', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_fees($params = array()) {
        return $this->request('v1/fees', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts($params = array()) {
        return $this->request('v1/accounts', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id($params = array()) {
        return $this->request('v1/accounts/{trader_id}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id_alias($params = array()) {
        return $this->request('v1/accounts/{trader_id}/alias', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id_ledger($params = array()) {
        return $this->request('v1/accounts/{trader_id}/ledger', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id_wallets($params = array()) {
        return $this->request('v1/accounts/{trader_id}/wallets', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id_wallet_ledger($params = array()) {
        return $this->request('v1/accounts/{trader_id}/wallet-ledger', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id_ledger_summary($params = array()) {
        return $this->request('v1/accounts/{trader_id}/ledger-summary', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_keys($params = array()) {
        return $this->request('v1/keys', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_fills($params = array()) {
        return $this->request('v1/fills', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_orders($params = array()) {
        return $this->request('v1/orders', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_orders_order_id($params = array()) {
        return $this->request('v1/orders/{order_id}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_reports($params = array()) {
        return $this->request('v1/reports', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_balances($params = array()) {
        return $this->request('v1/balances', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_transfers($params = array()) {
        return $this->request('v1/transfers', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_user($params = array()) {
        return $this->request('v1/user', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_credits($params = array()) {
        return $this->request('v1/credits', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_positions($params = array()) {
        return $this->request('v1/positions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_accounts_trader_id_competitions($params = array()) {
        return $this->request('v1/accounts/{trader_id}/competitions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_v1_closedpositions($params = array()) {
        return $this->request('v1/closedPositions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_keys($params = array()) {
        return $this->request('v1/keys', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_orders($params = array()) {
        return $this->request('v1/orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_orders_cancel_all_after($params = array()) {
        return $this->request('v1/orders/cancel-all-after', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_reports($params = array()) {
        return $this->request('v1/reports', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_transfers_to_wallet($params = array()) {
        return $this->request('v1/transfers/to-wallet', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_transfers_from_wallet($params = array()) {
        return $this->request('v1/transfers/from-wallet', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_transfers_internal_transfer($params = array()) {
        return $this->request('v1/transfers/internal-transfer', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_transfers_withdrawal_request($params = array()) {
        return $this->request('v1/transfers/withdrawal-request', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_orders_bulk($params = array()) {
        return $this->request('v1/orders/bulk', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_accounts_trader_id_competitions($params = array()) {
        return $this->request('v1/accounts/{trader_id}/competitions', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_v1_accounts_trader_id_create_competition($params = array()) {
        return $this->request('v1/accounts/{trader_id}/create-competition', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_patch_v1_orders_order_id($params = array()) {
        return $this->request('v1/orders/{order_id}', 'private', 'PATCH', $params, null, null, array("cost" => 1));
    }
    public function private_patch_v1_orders_bulk($params = array()) {
        return $this->request('v1/orders/bulk', 'private', 'PATCH', $params, null, null, array("cost" => 1));
    }
    public function private_put_v1_accounts_trader_id_alias($params = array()) {
        return $this->request('v1/accounts/{trader_id}/alias', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function private_delete_v1_keys_key($params = array()) {
        return $this->request('v1/keys/{key}', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_v1_orders($params = array()) {
        return $this->request('v1/orders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_v1_orders_order_id($params = array()) {
        return $this->request('v1/orders/{order_id}', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_v1_orders_bulk($params = array()) {
        return $this->request('v1/orders/bulk', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1Symbols($params = array()) {
        return $this->request('v1/symbols', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSummary($params = array()) {
        return $this->request('v1/symbols/summary', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbol($params = array()) {
        return $this->request('v1/symbols/{symbol}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolSummary($params = array()) {
        return $this->request('v1/symbols/{symbol}/summary', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolBook($params = array()) {
        return $this->request('v1/symbols/{symbol}/book', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolQuote($params = array()) {
        return $this->request('v1/symbols/{symbol}/quote', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolCandles($params = array()) {
        return $this->request('v1/symbols/{symbol}/candles', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolAuctions($params = array()) {
        return $this->request('v1/symbols/{symbol}/auctions', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolAuctionsAuctionCode($params = array()) {
        return $this->request('v1/symbols/{symbol}/auctions/{auction_code}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1Time($params = array()) {
        return $this->request('v1/time', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1Assets($params = array()) {
        return $this->request('v1/assets', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1Leaderboard($params = array()) {
        return $this->request('v1/leaderboard', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1AffiliateCompetitionCode($params = array()) {
        return $this->request('v1/affiliate/{competition_code}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1CompetitionCompetitionId($params = array()) {
        return $this->request('v1/competition/{competition_id}', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetV1SymbolsSymbolFunding($params = array()) {
        return $this->request('v1/symbols/{symbol}/funding', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Fees($params = array()) {
        return $this->request('v1/fees', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Accounts($params = array()) {
        return $this->request('v1/accounts', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderId($params = array()) {
        return $this->request('v1/accounts/{trader_id}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderIdAlias($params = array()) {
        return $this->request('v1/accounts/{trader_id}/alias', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderIdLedger($params = array()) {
        return $this->request('v1/accounts/{trader_id}/ledger', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderIdWallets($params = array()) {
        return $this->request('v1/accounts/{trader_id}/wallets', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderIdWalletLedger($params = array()) {
        return $this->request('v1/accounts/{trader_id}/wallet-ledger', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderIdLedgerSummary($params = array()) {
        return $this->request('v1/accounts/{trader_id}/ledger-summary', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Keys($params = array()) {
        return $this->request('v1/keys', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Fills($params = array()) {
        return $this->request('v1/fills', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Orders($params = array()) {
        return $this->request('v1/orders', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1OrdersOrderId($params = array()) {
        return $this->request('v1/orders/{order_id}', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Reports($params = array()) {
        return $this->request('v1/reports', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Balances($params = array()) {
        return $this->request('v1/balances', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Transfers($params = array()) {
        return $this->request('v1/transfers', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1User($params = array()) {
        return $this->request('v1/user', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Credits($params = array()) {
        return $this->request('v1/credits', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1Positions($params = array()) {
        return $this->request('v1/positions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1AccountsTraderIdCompetitions($params = array()) {
        return $this->request('v1/accounts/{trader_id}/competitions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetV1ClosedPositions($params = array()) {
        return $this->request('v1/closedPositions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1Keys($params = array()) {
        return $this->request('v1/keys', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1Orders($params = array()) {
        return $this->request('v1/orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1OrdersCancelAllAfter($params = array()) {
        return $this->request('v1/orders/cancel-all-after', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1Reports($params = array()) {
        return $this->request('v1/reports', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1TransfersToWallet($params = array()) {
        return $this->request('v1/transfers/to-wallet', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1TransfersFromWallet($params = array()) {
        return $this->request('v1/transfers/from-wallet', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1TransfersInternalTransfer($params = array()) {
        return $this->request('v1/transfers/internal-transfer', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1TransfersWithdrawalRequest($params = array()) {
        return $this->request('v1/transfers/withdrawal-request', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1OrdersBulk($params = array()) {
        return $this->request('v1/orders/bulk', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1AccountsTraderIdCompetitions($params = array()) {
        return $this->request('v1/accounts/{trader_id}/competitions', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostV1AccountsTraderIdCreateCompetition($params = array()) {
        return $this->request('v1/accounts/{trader_id}/create-competition', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePatchV1OrdersOrderId($params = array()) {
        return $this->request('v1/orders/{order_id}', 'private', 'PATCH', $params, null, null, array("cost" => 1));
    }
    public function privatePatchV1OrdersBulk($params = array()) {
        return $this->request('v1/orders/bulk', 'private', 'PATCH', $params, null, null, array("cost" => 1));
    }
    public function privatePutV1AccountsTraderIdAlias($params = array()) {
        return $this->request('v1/accounts/{trader_id}/alias', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteV1KeysKey($params = array()) {
        return $this->request('v1/keys/{key}', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteV1Orders($params = array()) {
        return $this->request('v1/orders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteV1OrdersOrderId($params = array()) {
        return $this->request('v1/orders/{order_id}', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteV1OrdersBulk($params = array()) {
        return $this->request('v1/orders/bulk', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
}
