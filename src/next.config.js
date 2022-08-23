/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  swcMinify: true,
  assetPrefix: '/versusdec/',
  basePath: '/versusdec',
  images: {
    loader: 'akamai',
    path: '',
  },
}

module.exports = nextConfig
