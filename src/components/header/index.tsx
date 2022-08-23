import Image from 'next/image'
import {Box, Stack, AppBar} from "@mui/material";
import {useCurrencies, Currencies} from "../../hooks/useCurrencies";
import {useEffect, useState} from "react";


export const Header = () => {
  const [params] = useState({
    usd: {
      currencyCodeA: Currencies.USD,
      currencyCodeB: Currencies.UAH
    },
    eur: {
      currencyCodeA: Currencies.EUR,
      currencyCodeB: Currencies.UAH
    }
  })

  const [eur, setEur] = useState(0)
  const [usd, setUsd] = useState(0)

  const USD = useCurrencies(params.usd)
  const EUR = useCurrencies(params.eur)

  useEffect(() => {
    EUR && EUR.data && setEur(EUR.data.info.rate.toFixed(2))
    USD && USD.data && setUsd(USD.data.info.rate.toFixed(2))
  }, [EUR, USD])

  return <>
    <AppBar position="static">
      <Box component={'header'} sx={{p: 3}}>
        <Stack direction={'row'} spacing={3} justifyContent={'space-between'}>
          <Box><Image src="/vercel.svg" width={72} height={16}/></Box>
          <Stack direction={'row'} spacing={2}>
            <Box><b>EUR</b> {eur}</Box>
            <Box><b>USD</b> {usd}</Box>
          </Stack>
        </Stack>
      </Box>
    </AppBar>
  </>
}
