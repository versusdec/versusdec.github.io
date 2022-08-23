import {ChangeEvent, useEffect, useState} from "react";
import {Box, MenuItem, Stack, Typography} from "@mui/material";
import {IState, useCurrencies, Currencies} from "../../hooks/useCurrencies";
import {Loader} from "../../elements/loader";
import {Input} from "../../elements/input";



export const Converter = () => {
  const [currencies, setCurrencies] = useState<IState>({
    currencyCodeA: Currencies.USD,
    currencyCodeB: Currencies.UAH
  })

  const [rate, setRate] = useState(0);
  const [amount, setAmount] = useState<string | number | null>(null);
  const [result, setResult] = useState<string | number | null>(null);

  const {data, loading, error} = useCurrencies(currencies)

  useEffect(() => {
    data && setRate(data.info.rate)
  }, [data, error])

  useEffect(() => {
    amount && setResult(+amount * rate)
  }, [rate])

  useEffect(() => {
    amount && setResult(+amount * rate)
  }, [amount])

  useEffect(() => {
    result && setAmount(+result / rate)
  }, [result])

  const handleCurrency = (e: ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    setCurrencies((prev) => ({...prev, [e.target.name]: +e.target.value ? +e.target.value : e.target.value}))
  }

  const handleAmount = (e: ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    switch (e.target.name) {
      case 'amount':
        setAmount(e.target.value)
        break;
      case 'result':
        setResult(e.target.value)
        break;
    }
  }

  return <>
    {loading && <Loader/>}
    <Stack spacing={2}>
      <Box>
        <Typography variant={'h5'} sx={{textTransform: 'uppercase'}}>
          {!error && 'convert'}
          {error && 'an error is occurred'}
        </Typography>
      </Box>
      <Stack direction={'row'} spacing={2}>
        <Input type={'number'} name={'amount'} onChange={handleAmount} value={amount || ''} onKeyDown={(e) => e.key === 'e' && e.preventDefault()}/>
        <Input onChange={handleCurrency} name={'currencyCodeA'} select value={currencies.currencyCodeA}>
          <MenuItem key={'usd'} value={Currencies.USD}>
            USD
          </MenuItem>
          <MenuItem key={'eur'} value={Currencies.EUR}>
            EUR
          </MenuItem>
          <MenuItem key={'uah'} value={Currencies.UAH}>
            UAH
          </MenuItem>
        </Input>
      </Stack>
      <Stack direction={'row'} spacing={2}>
        <Input type={'number'} name={'result'} onChange={handleAmount} value={result || ''} onKeyDown={(e) => e.key === 'e' && e.preventDefault()}/>
        <Input onChange={handleCurrency} name={'currencyCodeB'} select value={currencies.currencyCodeB}>
          <MenuItem key={'usd'} value={Currencies.USD}>
            USD
          </MenuItem>
          <MenuItem key={'eur'} value={Currencies.EUR}>
            EUR
          </MenuItem>
          <MenuItem key={'uah'} value={Currencies.UAH}>
            UAH
          </MenuItem>
        </Input>
      </Stack>
    </Stack>
  </>
}
