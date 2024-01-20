import { createContext, useContext, useState } from "react";

export const QuizContext = createContext(null);

export const QuizProvider = ({children}) => {
  const [data, setData] = useState({})
  
  const updateData = (val) => {
    setData(prev => ({...prev, ...val}))
  }
  
  return (<QuizContext.Provider value={{data, setData: updateData}}>{children}</QuizContext.Provider>)
}

export const useQuizContext = ()=> useContext(QuizContext)