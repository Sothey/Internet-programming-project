'minio' => [
    'driver' => 's3',
    'key'    => env('MINIO_ACCESS_KEY_ID'),
    'secret' => env('MINIO_SECRET_ACCESS_KEY'),
    'region' => 'us-east-1',
    'bucket' => env('MINIO_BUCKET'),
    'endpoint' => env('MINIO_ENDPOINT'),
    'use_path_style_endpoint' => true,
],
