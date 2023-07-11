<?php
namespace Aws\finspace;

use Aws\AwsClient;
use Aws\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **FinSpace User Environment Management service** service.
 * @method \Aws\Result createEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \Aws\Result createKxChangeset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKxChangesetAsync(array $args = [])
 * @method \Aws\Result createKxCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKxClusterAsync(array $args = [])
 * @method \Aws\Result createKxDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKxDatabaseAsync(array $args = [])
 * @method \Aws\Result createKxEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKxEnvironmentAsync(array $args = [])
 * @method \Aws\Result createKxUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKxUserAsync(array $args = [])
 * @method \Aws\Result deleteEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEnvironmentAsync(array $args = [])
 * @method \Aws\Result deleteKxCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKxClusterAsync(array $args = [])
 * @method \Aws\Result deleteKxDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKxDatabaseAsync(array $args = [])
 * @method \Aws\Result deleteKxEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKxEnvironmentAsync(array $args = [])
 * @method \Aws\Result deleteKxUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKxUserAsync(array $args = [])
 * @method \Aws\Result getEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEnvironmentAsync(array $args = [])
 * @method \Aws\Result getKxChangeset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKxChangesetAsync(array $args = [])
 * @method \Aws\Result getKxCluster(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKxClusterAsync(array $args = [])
 * @method \Aws\Result getKxConnectionString(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKxConnectionStringAsync(array $args = [])
 * @method \Aws\Result getKxDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKxDatabaseAsync(array $args = [])
 * @method \Aws\Result getKxEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKxEnvironmentAsync(array $args = [])
 * @method \Aws\Result getKxUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKxUserAsync(array $args = [])
 * @method \Aws\Result listEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEnvironmentsAsync(array $args = [])
 * @method \Aws\Result listKxChangesets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKxChangesetsAsync(array $args = [])
 * @method \Aws\Result listKxClusterNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKxClusterNodesAsync(array $args = [])
 * @method \Aws\Result listKxClusters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKxClustersAsync(array $args = [])
 * @method \Aws\Result listKxDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKxDatabasesAsync(array $args = [])
 * @method \Aws\Result listKxEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKxEnvironmentsAsync(array $args = [])
 * @method \Aws\Result listKxUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listKxUsersAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \Aws\Result updateKxClusterDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKxClusterDatabasesAsync(array $args = [])
 * @method \Aws\Result updateKxDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKxDatabaseAsync(array $args = [])
 * @method \Aws\Result updateKxEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKxEnvironmentAsync(array $args = [])
 * @method \Aws\Result updateKxEnvironmentNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKxEnvironmentNetworkAsync(array $args = [])
 * @method \Aws\Result updateKxUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateKxUserAsync(array $args = [])
 */
class finspaceClient extends AwsClient {}