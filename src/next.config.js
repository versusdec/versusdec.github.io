/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  swcMinify: true,
  assetPrefix: '.',
  basePath: '/versusdec',
  images: {
    loader: 'akamai',
    path: '.',
  },
}

module.exports = nextConfig
