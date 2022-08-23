import {Box, Paper, Stack} from "@mui/material";
import Image from "next/image";

export const Footer = () => {

  return <>
  <Paper variant={'outlined'} sx={{bgcolor: 'grey.200', p: 3}}>
    <Stack direction={'row'} justifyContent={'space-between'} alignItems={'center'}>
      <Box component={'footer'}>
        © 2021–{new Date().getFullYear()} ITOP1000 – All rights reserved.
      </Box>
      <Box><Image src="/vercel.svg" width={72} height={16}/></Box>
    </Stack>
  </Paper>
  </>
}
