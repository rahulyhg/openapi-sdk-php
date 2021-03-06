<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\ApiResolverTrait;

/**
 * @deprecated
 *
 * @method static AddDBInstanceNetworkType addDBInstanceNetworkType(array $options = [])
 * @method static AddTagsToResource addTagsToResource(array $options = [])
 * @method static AllocateInstancePrivateConnection allocateInstancePrivateConnection(array $options = [])
 * @method static AllocateInstancePublicConnection allocateInstancePublicConnection(array $options = [])
 * @method static AllocateReadWriteSplittingConnection allocateReadWriteSplittingConnection(array $options = [])
 * @method static CalculateDBInstanceWeight calculateDBInstanceWeight(array $options = [])
 * @method static CancelImport cancelImport(array $options = [])
 * @method static CheckAccountNameAvailable checkAccountNameAvailable(array $options = [])
 * @method static CheckInstanceExist checkInstanceExist(array $options = [])
 * @method static CheckRecoveryConditions checkRecoveryConditions(array $options = [])
 * @method static CheckResource checkResource(array $options = [])
 * @method static CloneDBInstance cloneDBInstance(array $options = [])
 * @method static CopyDatabase copyDatabase(array $options = [])
 * @method static CopyDatabaseBetweenInstances copyDatabaseBetweenInstances(array $options = [])
 * @method static CreateAccount createAccount(array $options = [])
 * @method static CreateBackup createBackup(array $options = [])
 * @method static CreateDBInstance createDBInstance(array $options = [])
 * @method static CreateDBInstanceReplica createDBInstanceReplica(array $options = [])
 * @method static CreateDatabase createDatabase(array $options = [])
 * @method static CreateMigrateTask createMigrateTask(array $options = [])
 * @method static CreateMigrateTaskForSQLServer createMigrateTaskForSQLServer(array $options = [])
 * @method static CreateOnlineDatabaseTask createOnlineDatabaseTask(array $options = [])
 * @method static CreateReadOnlyDBInstance createReadOnlyDBInstance(array $options = [])
 * @method static CreateTempDBInstance createTempDBInstance(array $options = [])
 * @method static DeleteAccount deleteAccount(array $options = [])
 * @method static DeleteBackup deleteBackup(array $options = [])
 * @method static DeleteDBInstance deleteDBInstance(array $options = [])
 * @method static DeleteDatabase deleteDatabase(array $options = [])
 * @method static DescibeImportsFromDatabase descibeImportsFromDatabase(array $options = [])
 * @method static DescribeAccounts describeAccounts(array $options = [])
 * @method static DescribeAvailableInstanceClass describeAvailableInstanceClass(array $options = [])
 * @method static DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method static DescribeBackupDatabase describeBackupDatabase(array $options = [])
 * @method static DescribeBackupPolicy describeBackupPolicy(array $options = [])
 * @method static DescribeBackupTasks describeBackupTasks(array $options = [])
 * @method static DescribeBackups describeBackups(array $options = [])
 * @method static DescribeBinlogFiles describeBinlogFiles(array $options = [])
 * @method static DescribeCharacterSetName describeCharacterSetName(array $options = [])
 * @method static DescribeCloudDbExpertService describeCloudDbExpertService(array $options = [])
 * @method static DescribeCollationTimeZones describeCollationTimeZones(array $options = [])
 * @method static DescribeDBInstanceAttribute describeDBInstanceAttribute(array $options = [])
 * @method static DescribeDBInstanceByTags describeDBInstanceByTags(array $options = [])
 * @method static DescribeDBInstanceHAConfig describeDBInstanceHAConfig(array $options = [])
 * @method static DescribeDBInstanceIPArrayList describeDBInstanceIPArrayList(array $options = [])
 * @method static DescribeDBInstanceMonitor describeDBInstanceMonitor(array $options = [])
 * @method static DescribeDBInstanceNetInfo describeDBInstanceNetInfo(array $options = [])
 * @method static DescribeDBInstancePerformance describeDBInstancePerformance(array $options = [])
 * @method static DescribeDBInstanceProxyConfiguration describeDBInstanceProxyConfiguration(array $options = [])
 * @method static DescribeDBInstanceSSL describeDBInstanceSSL(array $options = [])
 * @method static DescribeDBInstanceTDE describeDBInstanceTDE(array $options = [])
 * @method static DescribeDBInstances describeDBInstances(array $options = [])
 * @method static DescribeDBInstancesAsCsv describeDBInstancesAsCsv(array $options = [])
 * @method static DescribeDBInstancesByExpireTime describeDBInstancesByExpireTime(array $options = [])
 * @method static DescribeDBInstancesByPerformance describeDBInstancesByPerformance(array $options = [])
 * @method static DescribeDatabases describeDatabases(array $options = [])
 * @method static DescribeDiagnosticReportList describeDiagnosticReportList(array $options = [])
 * @method static DescribeErrorLogs describeErrorLogs(array $options = [])
 * @method static DescribeInstanceAutoRenewalAttribute describeInstanceAutoRenewalAttribute(array $options = [])
 * @method static DescribeLogBackupFiles describeLogBackupFiles(array $options = [])
 * @method static DescribeMetaList describeMetaList(array $options = [])
 * @method static DescribeMigrateTasks describeMigrateTasks(array $options = [])
 * @method static DescribeMigrateTasksForSQLServer describeMigrateTasksForSQLServer(array $options = [])
 * @method static DescribeModifyParameterLog describeModifyParameterLog(array $options = [])
 * @method static DescribeOssDownloads describeOssDownloads(array $options = [])
 * @method static DescribeOssDownloadsForSQLServer describeOssDownloadsForSQLServer(array $options = [])
 * @method static DescribeParameterTemplates describeParameterTemplates(array $options = [])
 * @method static DescribeParameters describeParameters(array $options = [])
 * @method static DescribePrice describePrice(array $options = [])
 * @method static DescribeProxyFunctionSupport describeProxyFunctionSupport(array $options = [])
 * @method static DescribeRegions describeRegions(array $options = [])
 * @method static DescribeRenewalPrice describeRenewalPrice(array $options = [])
 * @method static DescribeResourceUsage describeResourceUsage(array $options = [])
 * @method static DescribeSQLLogFiles describeSQLLogFiles(array $options = [])
 * @method static DescribeSQLLogRecords describeSQLLogRecords(array $options = [])
 * @method static DescribeSQLLogReportList describeSQLLogReportList(array $options = [])
 * @method static DescribeSQLLogReports describeSQLLogReports(array $options = [])
 * @method static DescribeSQLReports describeSQLReports(array $options = [])
 * @method static DescribeSecurityGroupConfiguration describeSecurityGroupConfiguration(array $options = [])
 * @method static DescribeSlowLogRecords describeSlowLogRecords(array $options = [])
 * @method static DescribeSlowLogs describeSlowLogs(array $options = [])
 * @method static DescribeTags describeTags(array $options = [])
 * @method static DescribeTargetAVZ describeTargetAVZ(array $options = [])
 * @method static DescribeTaskInfo describeTaskInfo(array $options = [])
 * @method static DescribeTasks describeTasks(array $options = [])
 * @method static DescribeTemplatesList describeTemplatesList(array $options = [])
 * @method static GrantAccountPrivilege grantAccountPrivilege(array $options = [])
 * @method static GrantOperatorPermission grantOperatorPermission(array $options = [])
 * @method static ImportDataForSQLServer importDataForSQLServer(array $options = [])
 * @method static ImportDatabaseBetweenInstances importDatabaseBetweenInstances(array $options = [])
 * @method static ListTagResources listTagResources(array $options = [])
 * @method static MigrateSecurityIPMode migrateSecurityIPMode(array $options = [])
 * @method static MigrateToOtherZone migrateToOtherZone(array $options = [])
 * @method static ModifyAccountDescription modifyAccountDescription(array $options = [])
 * @method static ModifyActiveOperationPendingTask modifyActiveOperationPendingTask(array $options = [])
 * @method static ModifyBackupPolicy modifyBackupPolicy(array $options = [])
 * @method static ModifyCollationTimeZone modifyCollationTimeZone(array $options = [])
 * @method static ModifyDBDescription modifyDBDescription(array $options = [])
 * @method static ModifyDBInstanceConnectionMode modifyDBInstanceConnectionMode(array $options = [])
 * @method static ModifyDBInstanceConnectionString modifyDBInstanceConnectionString(array $options = [])
 * @method static ModifyDBInstanceDescription modifyDBInstanceDescription(array $options = [])
 * @method static ModifyDBInstanceHAConfig modifyDBInstanceHAConfig(array $options = [])
 * @method static ModifyDBInstanceMaintainTime modifyDBInstanceMaintainTime(array $options = [])
 * @method static ModifyDBInstanceMonitor modifyDBInstanceMonitor(array $options = [])
 * @method static ModifyDBInstanceNetworkExpireTime modifyDBInstanceNetworkExpireTime(array $options = [])
 * @method static ModifyDBInstanceNetworkType modifyDBInstanceNetworkType(array $options = [])
 * @method static ModifyDBInstanceProxyConfiguration modifyDBInstanceProxyConfiguration(array $options = [])
 * @method static ModifyDBInstanceSSL modifyDBInstanceSSL(array $options = [])
 * @method static ModifyDBInstanceSpec modifyDBInstanceSpec(array $options = [])
 * @method static ModifyDBInstanceTDE modifyDBInstanceTDE(array $options = [])
 * @method static ModifyInstanceAutoRenewalAttribute modifyInstanceAutoRenewalAttribute(array $options = [])
 * @method static ModifyMySQLDBInstanceDelay modifyMySQLDBInstanceDelay(array $options = [])
 * @method static ModifyParameter modifyParameter(array $options = [])
 * @method static ModifyReadWriteSplittingConnection modifyReadWriteSplittingConnection(array $options = [])
 * @method static ModifyReadonlyInstanceDelayReplicationTime modifyReadonlyInstanceDelayReplicationTime(array $options = [])
 * @method static ModifyReplicaDescription modifyReplicaDescription(array $options = [])
 * @method static ModifyResourceGroup modifyResourceGroup(array $options = [])
 * @method static ModifySQLCollectorPolicy modifySQLCollectorPolicy(array $options = [])
 * @method static ModifySecurityGroupConfiguration modifySecurityGroupConfiguration(array $options = [])
 * @method static ModifySecurityIps modifySecurityIps(array $options = [])
 * @method static PurgeDBInstanceLog purgeDBInstanceLog(array $options = [])
 * @method static RdsApiResolver rdsApiResolver(array $options = [])
 * @method static RecoveryDBInstance recoveryDBInstance(array $options = [])
 * @method static ReleaseInstancePublicConnection releaseInstancePublicConnection(array $options = [])
 * @method static ReleaseReadWriteSplittingConnection releaseReadWriteSplittingConnection(array $options = [])
 * @method static RemoveTagsFromResource removeTagsFromResource(array $options = [])
 * @method static RenewInstance renewInstance(array $options = [])
 * @method static RequestServiceOfCloudDBExpert requestServiceOfCloudDBExpert(array $options = [])
 * @method static ResetAccount resetAccount(array $options = [])
 * @method static ResetAccountForPG resetAccountForPG(array $options = [])
 * @method static ResetAccountPassword resetAccountPassword(array $options = [])
 * @method static RestartDBInstance restartDBInstance(array $options = [])
 * @method static RestoreDBInstance restoreDBInstance(array $options = [])
 * @method static RevokeAccountPrivilege revokeAccountPrivilege(array $options = [])
 * @method static RevokeOperatorPermission revokeOperatorPermission(array $options = [])
 * @method static SwitchDBInstanceHA switchDBInstanceHA(array $options = [])
 * @method static SwitchDBInstanceNetType switchDBInstanceNetType(array $options = [])
 * @method static SwitchDBInstanceVpc switchDBInstanceVpc(array $options = [])
 * @method static TagResources tagResources(array $options = [])
 * @method static UntagResources untagResources(array $options = [])
 * @method static UpgradeDBInstanceEngineVersion upgradeDBInstanceEngineVersion(array $options = [])
 * @method static UpgradeDBInstanceKernelVersion upgradeDBInstanceKernelVersion(array $options = [])
 */
class Rds
{
    use ApiResolverTrait;
}
