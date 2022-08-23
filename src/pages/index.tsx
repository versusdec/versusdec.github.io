import type {NextPage} from 'next'
import Head from 'next/head'
import {Footer} from "../components/footer";
import {Header} from "../components/header";
import {Box, Paper} from "@mui/material";
import {Converter} from "../components/converter";

const Home: NextPage = () => {
  return (
    <>
      <Head>
        <title>ITOP1000</title>
        <meta name="description" content="ITOP1000"/>
        <link rel="icon" href="/favicon.ico"/>
      </Head>
      <Header/>
      <Box component={'main'} sx={{p: 3}}>
        <Paper elevation={3}>
          <Box p={{md: 5, sm: 3, xs: 2}}>
            <Converter/>
          </Box>
        </Paper>
      </Box>
      <Footer/>
    </>
  )
}

export default Home
