import {api} from '../api'
import {useEffect, useState} from "react";

export interface IUseCurrencies {
  data: { [key: string]: any } | null
  loading: boolean
  error: boolean
}

export interface IState {
  currencyCodeA: Currencies
  currencyCodeB: Currencies
}

export enum Currencies {
  USD = 'USD',
  EUR = 'EUR',
  UAH = 'UAH'
}

export const useCurrencies: (params: IState) => IUseCurrencies = (params) => {
  const [data, setData] = useState(null)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(false)
  const query = new URLSearchParams({from: params.currencyCodeA, to: params.currencyCodeB}).toString()
  useEffect(() => {
    (async () => {
      try {
        const {data} = await api.currencies.fetch(query).then(res => res)
        setData(data)
      } catch (e) {
        setError(true)
      }
      setLoading(false)
    })()

  }, [params])
  return {data, loading, error}
}