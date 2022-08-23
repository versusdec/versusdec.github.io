import {OutlinedTextFieldProps, StandardTextFieldProps, TextField} from '@mui/material'

export const Input = (props: StandardTextFieldProps | OutlinedTextFieldProps) => {

  return <>
    <TextField sx={{minWidth: 90}} {...props} />
  </>
}
