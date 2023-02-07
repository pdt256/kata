package CurrencyConversion;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;

public class CurrencyConversionTest {
    private CurrencyConversion currencyConversion;

    @BeforeEach
    public void setup()
    {
        currencyConversion = new CurrencyConversion();
    }

    @Test
    public void convertUSDtoEUR()
    {
        // @TODO Given 10 USD (U.S. Dollar) convert to 8 EUR (Euro) using 0.8 rate
    }

    @Test
    public void convertCHFtoJPY()
    {
        // @TODO Given 30 CHF (Swiss Franc) convert to 3411 JPY (Japanese Yen) using 113.7 exchange rate
    }

    @Test
    public void convertRUBtoGBP()
    {
        // @TODO Given 396.5 RUB (Russian Ruble) convert to 4.3615 GBP (British Pound) using 0.011 exchange rate
    }
}