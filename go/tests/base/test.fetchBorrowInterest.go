package base
import "github.com/ccxt/ccxt/go/v4"

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


    func TestFetchBorrowInterest(exchange ccxt.ICoreExchange, skippedProperties interface{}, code interface{}, symbol interface{}) <- chan interface{} {
                ch := make(chan interface{})
                go func() interface{} {
                    defer close(ch)
                    defer ReturnPanicError(ch)
                        var method interface{} = "fetchBorrowInterest"
            
                borrowInterest:= (<-exchange.FetchBorrowInterest(code, symbol))
                PanicOnError(borrowInterest)
                AssertNonEmtpyArray(exchange, skippedProperties, method, borrowInterest, code)
                for i := 0; IsLessThan(i, GetArrayLength(borrowInterest)); i++ {
                    TestBorrowInterest(exchange, skippedProperties, method, GetValue(borrowInterest, i), code, symbol)
                }
            
                ch <- true
                return nil
            
                }()
                return ch
            }
