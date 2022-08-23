import {root} from './config';
import axios from "axios";

export const api = Object.freeze({
  currencies: {
    fetch: async (query: string) => {

      return await axios.get(`${root}convert?${query}`, {
        method: 'GET'
      })
    }
  }
});
